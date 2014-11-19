<div class="container">
    {{ Form::open(array('action'    =>  'AuthController@login','method'  =>  'post','class'=>'hgy-form form-horizontal','role'=>'form')) }}
      <div class="form-group">
        {{ Form::label('email','Email',array('class'   =>  'col-sm-2 control-label')) }}
        <div class="col-sm-10">
        {{ Form::text('email','',array('class'=>'form-control',"id"=>"inputEmail", "placeholder"=>"Email")) }}
        </div>
      </div>
      <div class="form-group">
        {{ Form::label('password','密码：',array('class'    =>  'col-sm-2 control-label'))  }}
          <div class="col-sm-10">
          {{ Form::password('password',array('type'=>'password','class'=>'form-control',"id"=>"inputPassword", "placeholder"=>"密码：")) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
              {{ Form::checkbox('remember','true') }} 记住密码
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success">
              <i class="hgy-icon glyphicon glyphicon-ok"></i>
              登&nbsp;&nbsp;&nbsp;&nbsp;录
            </button>
          </div>
        </div>
    {{ Form::close() }}
</div>
