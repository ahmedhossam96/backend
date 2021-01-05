@csrf
<div class="form-group">
    <label for="category_id"> Category name</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value>Not set</option>
        @foreach($categories as $category) 
            @if(isset($product))
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}" >{{ $category->name }}</option>  
            @endif
        @endforeach
    </select>
    @if ($errors->first('category_id'))
        <span class="text-danger">
          {{ $errors->first('category_id') }}
        </span>
    @endif
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ isset($product)?$product->name : '' }}">
    @if ($errors->first('name'))
        <span class="text-danger">
          {{ $errors->first('name') }}
        </span>
    @endif

</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control">
        {{ isset($product)?$product->description : '' }}
    </textarea>
    @if ($errors->first('description'))
        <span class="text-danger">
          {{ $errors->first('description') }}
        </span>
    @endif
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ isset($product)?$product->price : '' }}">
    @if ($errors->first('price'))
        <span class="text-danger">
          {{ $errors->first('price') }}
        </span>
    @endif

</div>
<div class="form-group">
    <label for="quantity">Quintity</label>
    <input type="text" name="quantity" id="quantity" class="form-control" value="{{ isset($product)?$product->quantity : '' }}">
    @if ($errors->first('quantity'))
        <span class="text-danger">
          {{ $errors->first('quantity') }}
        </span>
    @endif

</div>
<div class="form-group">
    <label for="img">img</label>
    <input type="file" name="img" id="quntity" class="form-control" 
    value="{{ isset($product)?$product->img : '' }}">
    @if ($errors->first('img'))
        <span class="text-danger">
          {{ $errors->first('img') }}
        </span>
    @endif

</div>

<div class="form-group">
    <label for="user_id"> user</label>
    <select name="user_id" id="user_id" class="form-control">
        <option value>Not set</option>
        @foreach($users as $user) 
            @if(isset($product))
                <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
            @else
                <option value="{{ $user->id }}" >{{ $user->name }}</option>  
            @endif
        @endforeach
    </select>
    @if ($errors->first('user_id'))
        <span class="text-danger">
          {{ $errors->first('user_id') }}
        </span>
    @endif
</div>

<div class="text-center">
    <button type="submit" class="btn btn-success">Save</button>
</div>
