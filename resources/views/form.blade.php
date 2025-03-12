<form name = "employee-form" id = "employee-form" method = "post" action = "{{url{'store-form'}}}" >

@csrf 

<div class = "form-group">
    <label for = "name">Name</label>
    <input type = "text" id = "name" name = "name" class = "form-control" required = "true">
</div>
<div class = "form-group">
    <label for = "lastname">Lastname</label>
    <input type = "text" id = "lastname" name = "lastname" class = "form-control" required = "true">
</div>
<div class = "form-group">
    <label for = "email">Description</label>
    <input type = "text" id = "email" name = "email" class = "form-control" required = "true">
</div>
<div class = "form-group">
    <label for = "post">Post</label>
    <input type = "text" id = "post" name = "post" class = "form-control" required = "true">
</div>

<div class = "form-group">
    <label for = "workData">workData</label>
    <textarea name = "workData" class = "form-control" required = "true"></textarea>
</div>

<button type = "submit" class = "btn btn-primary">Submit</button>
</form>