<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     .co-sty{
        color: gray;
        font-family: 'Roboto Condensed', sans-serif;
        text-transform: lowercase;
     }
     .text-style{
        text-transform: capitalize;
     }
     .side{
        padding-left: 30px;
     }
     .pd{
        padding-right: 3px;
     }
     a:active{
        color: #DF362D
     }
    </style>
    
    </head>

<body>
    <div class="container-fluid" style="display: flex">
        <div class="row">
            <div class="d-flex flex-column justify-content-between col-auto  min-vh-100">
                <div>  
                    <div style="display: flex">
                        <img src="{{asset('Asset 2.png')}}" alt="" width="13%" class="mt-4" style="padding-bottom: 15px;
                        padding-top: 15px;
                        padding-left: 15px;">
                        <h1 style="padding-top: 40px; font-size: x-large;">Smart</h1>    
                    
                    </div>         
                       
                 <div class="mt-4">
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0">
                        <li>
                            <a href="" class="co-sty">
                                <i class="fas fa-tachometer-alt mb-3">
                                </i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Dashboard</span>
                              
                            </a>
                            
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu1">
                        <li class="nav-item disabled">
                            <a href="#sidemenu" data-bs-toggle="collapse" class="co-sty" aria-current="page">
                                <i class="fas fa-shopping-cart mb-3"></i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Purchase</span>
                                    <i class="fa fa-caret-down"></i>
                                
                          
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu1">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page">
                                        <i class="fas fa-file-invoice pd"></i> Purchase Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-truck-loading pd"></i>Goods Received</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-undo pd"></i>
                                        Goods Return</a>
                                </li>
                            </ul>
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item disabled">
                            <a href="#sales" data-bs-toggle="collapse" class=" co-sty" aria-current="page">
                                <i class="fas fa-chart-line mb-3">  </i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Sales</span>
                                    <i class="fa fa-caret-down"></i>
                              
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="sales" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"> <i class="fas fa-shopping-basket pd"></i>
                                        Product Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-shipping-fast pd"></i>
                                        Product Delivery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-truck pd"></i>
                                        Product Dispatch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"> <i class="fas fa-undo-alt pd"></i>
                                        Product Return</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-exchange-alt pd"></i>
                                        IBT(Inter Branch Transfer)</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item disabled">
                            <a href="#guidance" data-bs-toggle="collapse" class="co-sty" aria-current="page">
                                <i class="fas fa-question-circle mb-3"> </i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Guidance</span>
                                    <i class="fa fa-caret-down"></i>
                               
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="guidance" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"> <i class="fas fa-hourglass-half pd"></i>
                                        Expiry soon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"> <i class="fas fa-exclamation-triangle pd"></i>
                                        Low Stock</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-exclamation-circle pd"></i>
                                        Over Stock</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-snowflake pd"></i>
                                        Seasonal Product Requirement</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item disabled">
                            <a href="#accounts" data-bs-toggle="collapse" class="co-sty " aria-current="page">
                                <i class="fas fa-users mb-3"></i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Accounts</span>
                                    <i class="fa fa-caret-down"></i>
                                
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="accounts" data-bs-parent="#menu">
                                <li class="nav-item ">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"><i class="fas fa-money-check-alt pd"></i>
                                        Invoice Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-hand-holding-usd pd"></i>
                                        Received amount</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item disabled">
                            <a href="#stock" data-bs-toggle="collapse" class="co-sty" aria-current="page">
                                <i class="fas fa-boxes mb-3"></i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Stock Management</span>
                                    <i class="fa fa-caret-down"></i>
                                
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="stock" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"><i class="fas fa-database pd"></i>
                                        Opening Stock Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-edit pd"></i>
                                        Current Stock Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-trash-alt pd"></i>
                                        Wastage Stock Update</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item disabled">
                            <a href="#rack" data-bs-toggle="collapse" class="co-sty" aria-current="page">
                                <i class="fas fa-warehouse mb-3"> </i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Rack Management</span>
                                    <i class="fa fa-caret-down"></i>
                               
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="rack" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"><i class="fas fa-warehouse pd"></i>
                                        Update Rack Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-redo pd"></i>
                                        Rack Order reset</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="master_data">
                        <li class="nav-item disabled">
                            <a href="#master" data-bs-toggle="collapse" class="co-sty" aria-current="page">
                                <i class="fas fa-database mb-3"></i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Master Data</span>
                                    <i class="fa fa-caret-down"></i>
                                
                            </a>
                            <ul class="nav collapse ms-1 flex-column" id="master" data-bs-parent="#master_data">
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#" aria-current="page"><i class="fas fa-folder-open pd"></i>
                                        Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-folder pd"></i>
                                        Sub Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-box pd"></i>
                                        Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-edit pd"></i>
                                        Vendor Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link co-sty side text-style" href="#"><i class="fas fa-warehouse pd"></i>
                                        Warehouse Update</a>
                                </li>
                            </ul>
                       
    
                        </li>  
                    </ul>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li>
                            <a href="" class="co-sty" aria-current="page">
                                <i class="fas fa-cog"></i>
                                    <span class="ms-2 d-none d-sm-inline text-style">Settings</span>
                                
                            </a>
                            
                        </li>  
                    </ul>
                 </div>
                  
                </div>
            </div>
        </div>
        <div class="row" style="width:115% ;">
            <x-app-layout/>
        </div>

    </div>


    <script>
        < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity = "sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>
