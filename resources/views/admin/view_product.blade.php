<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            /* margin-left: 50px; */
        }
        table{
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #588c7e;
            color: white;
        }
        /* tr:nth-child(even) {background-color: #f2f2f2} */

        td{
            border: 1px solid #588c7e;
            align-items: center;
            background-color: #f2f2f2;
            color: black;
        }

        input[type='search']{
            width: 500px;
            height: 60px;
            margin-left: 50px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{url('product_search')}}" method="get">
                @csrf
                <input type="search" name="search" placeholder="Search Product">
                <input type="submit" class="btn btn-secondary" value="Search">
            </form>

            <div class=div_deg>
                <table>
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach($product as $products)

                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{!!Str::limit($products->description, 10)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>
                            <img height="120" width="120" src="product/{{$products->image}}">
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" onclick="cofirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                        </td>
                    </tr>

                    @endforeach
            
                </table>

            </div>
            
            <div class="div_deg">
                {{$product->onEachSide(1)->links()}}
            </div>

      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>