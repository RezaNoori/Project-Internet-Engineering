@extends('client.layout')
@section('title')
    ثبت سفارش
@endsection
@section('maincontent')
<br>
<center>
<div style="text-align:right;">
<form method="POST" action="{{ route('order') }}">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">محصول مورد نیاز</label>
      <div class="col-md-4">
        <select id="product" name="product" class="form-control">
          <option value="1">زعفران</option>
          <option value="2">پسته</option>
        </select>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="qty">میزان مورد نیاز</label>  
      <div class="col-md-4">
      <input id="qty" name="qty" type="text" placeholder="placeholder" class="form-control input-md" required="">
      <span class="help-block">بر اساس واحد محصول مورد نظرتان وارد کنید</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="phone">شماره تلفن</label>  
      <div class="col-md-4">
      <input id="phone" name="phone" type="text" placeholder="09123456789" class="form-control input-md" required="">
      <span class="help-block">شماره تماس در دسترس برای تماس وارد کنید</span>  
      </div>
    </div>
    
    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address">آدرس</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="address" name="address">آدرس </textarea>
      </div>
    </div>
    
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-8">
        <button id="submit" name="submit" class="btn btn-success">ارسال</button>
      </div>
    </div>
    
    </fieldset>
    </form>

</div>
</center>
    

@endsection