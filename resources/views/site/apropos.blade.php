@extends('layouts.page')
@section('titre')
@lang("Apropos")
@endsection
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="col-md-11 mx-auto p-0 bg-white shadow-sm rounded">
            <style>
                .breadcrumb .breadcrumb-item {
                    margin: 0;
                }

                .breadcrumb {
                    margin: -20px;
                    background-color: #fff;
                    padding: 1.5rem 20px;
                    border-bottom: 1px solid #4329a333;
                    border-radius: 0;
                    margin-bottom: 20px;
                }

                .breadcrumb .breadcrumb-item a {
                    color: #131313;
                    font-weight: 600;
                }

                .breadcrumb-item.active {
                    color: #141433;
                }

                .breadcrumb-area {
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: cover;
                    min-height: 50vh;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    text-align: center;
                }

                .breadcrumb-area .breadcrumb-content>h2 {
                    font-weight: 700;
                    color: #ffffff;
                    text-transform: uppercase;
                    text-align: center;
                    font-size: 36px;
                    margin-bottom: 0;
                    padding-bottom: 20px;
                }

                .breadcrumb-area .breadcrumb-content ul>li:first-child {
                    padding-left: 0;
                }

                .breadcrumb-area .breadcrumb-content ul>li {
                    color: #000000;
                    display: inline-block;
                    padding-left: 20px;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content ul>li:before {
                    content: "\f054";
                    font-family: 'Font Awesome 5 Free';
                    font-weight: 600;
                    position: absolute;
                    right: -15px;
                    top: 2px;
                    font-size: 10px;
                    color: #ffffff;
                }

                .breadcrumb-area .breadcrumb-content ul>li:last-child:before {
                    display: none;
                    content: none;
                }

                .breadcrumb-area .breadcrumb-content ul>li>a {
                    color: #ffffff;
                }

                .breadcrumb-area .breadcrumb-content ul>li {
                    color: #ffffff;
                    display: inline-block;
                    padding-left: 20px;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content ul>li.active {
                    color: #ba1c24;
                    font-weight: 600;
                }
            </style>
            <div class="breadcrumb-area " style="background-image: url('/assets/img/apropos.png')">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>@lang("APROPOS")</h2>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .nav-pills>.active {
                background-color: darkblue !important;
            }
        </style>
        <div class="col-md-11 mx-auto px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="apropos row">
                <div class="col-md-3 d-flex flex-column " id="navbar-example2">
                    <a href="#presentation" class="page-scroll border-bottom border-width-1 border-dark my-2 p-2 rounded">@lang("Présentation de l'entreprise")</a>
                    <a href="#presentation2" class="border-bottom border-width-1 border-dark my-2 p-2 rounded">@lang("Présentation de l'entreprise")</a>
                    <a href="#presentation" class="border-bottom border-width-1 border-dark my-2 p-2 rounded">@lang("Présentation de l'entreprise")</a>
                    <a href="#presentation" class="border-bottom border-width-1 border-dark my-2 p-2 rounded">@lang("Présentation de l'entreprise")</a>
                </div>
                <div class="col-md-9" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                    <div class="" id="presentation">
                        <h3 class="text-center my-4 fw-700">
                            Présentation de l'entreprise
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eaque, accusamus repellat inventore exercitationem voluptate blanditiis earum dolor ipsa? Nisi sit adipisci quibusdam tempore. Placeat, sit tempore. Ab sint consequuntur, ratione excepturi eius suscipit dolor culpa facere tempore saepe voluptatem, error at quidem dolore? Modi quae, iure quod voluptate vitae ipsa nulla reprehenderit voluptates expedita, maxime nemo, optio ipsum labore quis repellat. Ut optio neque doloribus beatae unde fuga inventore porro tempora eveniet culpa rem corporis excepturi amet voluptas veritatis explicabo, perferendis impedit? Adipisci nostrum quae aspernatur odio, ab suscipit natus aliquid at quis incidunt quisquam dolores quos corrupti, beatae commodi omnis ratione alias! Quia in esse vero illum veritatis quis excepturi nihil iure, atque deleniti et officia iusto blanditiis doloremque debitis aperiam labore, nostrum mollitia nulla laudantium? Nisi quibusdam eligendi impedit! Nam, vel enim! Placeat a ratione ad, sint, consequuntur tenetur, eaque adipisci vero facilis repellendus itaque neque deleniti laudantium. Eaque maiores fugiat necessitatibus nobis quae dolor fuga, sunt quod, iure numquam modi debitis consequuntur autem, repellat nihil sed laudantium sint ducimus aliquam corrupti quisquam incidunt accusamus! Officiis, qui beatae. Eligendi reprehenderit voluptatum neque harum odio ex, consequuntur ratione in iste voluptatibus officia, veniam sapiente maiores ea enim dignissimos.</p>

                    </div>
                    <div class="" id="presentation2">
                        <h3 class="text-center my-4 fw-700">
                            Présentation de l'entreprise
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eaque, accusamus repellat inventore exercitationem voluptate blanditiis earum dolor ipsa? Nisi sit adipisci quibusdam tempore. Placeat, sit tempore. Ab sint consequuntur, ratione excepturi eius suscipit dolor culpa facere tempore saepe voluptatem, error at quidem dolore? Modi quae, iure quod voluptate vitae ipsa nulla reprehenderit voluptates expedita, maxime nemo, optio ipsum labore quis repellat. Ut optio neque doloribus beatae unde fuga inventore porro tempora eveniet culpa rem corporis excepturi amet voluptas veritatis explicabo, perferendis impedit? Adipisci nostrum quae aspernatur odio, ab suscipit natus aliquid at quis incidunt quisquam dolores quos corrupti, beatae commodi omnis ratione alias! Quia in esse vero illum veritatis quis excepturi nihil iure, atque deleniti et officia iusto blanditiis doloremque debitis aperiam labore, nostrum mollitia nulla laudantium? Nisi quibusdam eligendi impedit! Nam, vel enim! Placeat a ratione ad, sint, consequuntur tenetur, eaque adipisci vero facilis repellendus itaque neque deleniti laudantium. Eaque maiores fugiat necessitatibus nobis quae dolor fuga, sunt quod, iure numquam modi debitis consequuntur autem, repellat nihil sed laudantium sint ducimus aliquam corrupti quisquam incidunt accusamus! Officiis, qui beatae. Eligendi reprehenderit voluptatum neque harum odio ex, consequuntur ratione in iste voluptatibus officia, veniam sapiente maiores ea enim dignissimos.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection
