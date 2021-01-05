@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ isset($client)?$client->name : '' }}">
    

</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"  class="form-control" value="{{ isset($client)?$client->email : '' }}">
        
   
    
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password"  class="form-control" value="{{ isset($client)?$client->password: '' }}">
        
   
    
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success">Save</button>
</div>
