<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="css/bill.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png" alt="logo" width="500">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Hotel chathumdara</div>
        <div>Ihala Yagoda, <br /> Imbulgoda 11856</div>
        <div>0332 262 652</div>
        <div><a href="#">chathumadura@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>code: </span> {{$orderData->orderCode}}</div>
        <div><span>name: </span> {{$orderData->customerName}}</div>
        <div><span>mobile: </span>{{$orderData->customerMobile}}</div>
        <div><span>email : </span> <a href="#">{{$orderData->customerEmail}}</a></div>
        <div><span>DATE</span>{{$orderData->created_at}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>

        
          <tr>
            <th class="service">ITEM  ID</th>
            <th class="desc">ITEM NAME</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>  
          </tr>
        </thead>
        <tbody>
        @php
               $total = 0;
               $currentTot = 0;       
        @endphp 
        @foreach($itemList as $item)

                @if($item -> orderCode == $oc)
                  @php
                    $currentTot = $item->price * $item->quantity;
                    $total = $total + $currentTot;
                  @endphp  

                  <tr>
                        <td class="service">{{$item->ItemId}}</td>
                        <td class="desc">{{$item->ItemName}}</td>
                        <td class="unit">{{$item->price}}</td>
                        <td class="qty">{{$item->quantity}}</td>
                        <td class="total">{{$currentTot}}</td>
                    </tr>
                @endif
          @endforeach

          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">{{$total}}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
      <form action="/deleteOrder" method="post">
        {{csrf_field()}}
      <input type="number" value="{{$orderData->id}}" name="oid" hidden>
      <div class="form-group" style="display: flex;justify-content: center;" >
            <button class="button" type="submit">Finish Payment & Remove Order</button>
      </div>
  </form>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>