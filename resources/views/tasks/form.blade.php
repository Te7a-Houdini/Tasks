@include('partials.form-errors')


<form class="form-horizontal" method="POST" action="{{$action}}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field($method)}}

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">{{$formTitle}}</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <div class="col-sm-6 ol-md-6 col-xs-12">

                            <div class="white-box">

                                <div class="form-group">
                                    <label for="name">{{Lang::get('bakery.name')}}</label>

                                    <input name="name" class="form-control" type="text" required="required" value="{{old('name' , $product->name)}}">

                                </div>

                                <div class="form-group">
                                    <label for="name">{{Lang::get('bakery.price')}}</label>

                                    <input name="price" class="form-control" type="text" required="required" value="{{old('price' , $product->price)}}">

                                </div>

                                <div class="form-group">

                                    @if(!is_null($product->picture) && file_exists($product->pictureFilePath()))
                                        <img src="{{$product->pictureAssetPath()}}" class="thumb-lg img-circle" alt="img" >
                                    @endif

                                </div>


                            </div>
                        </div>


                        <div class="col-sm-6 ol-md-6 col-xs-12">

                            <div class="white-box">


                                <div class="form-group">
                                    <label for="picture">{{Lang::get('bakery.picture')}}</label>

                                    <input name="picture" class="form-control" type="file" >

                                </div>

                                <div class="form-group">
                                    <label for="name">{{Lang::get('bakery.category')}}</label>

                                    <select  class="form-control" required="required" name="category_id">
                                        @foreach($categories as $category)
                                            <option @if($product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" > {{Lang::get('bakery.submit')}} <i class="fa fa-check"></i></button>
                                <a href="{{url()->previous()}}" class="btn btn-inverse waves-effect waves-light" style="color: white">{{Lang::get('bakery.cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</form>