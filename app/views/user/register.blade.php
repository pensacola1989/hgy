<div class="container">
    {{ Form::open(array('action'    =>  'UserController@register','method'  =>  'post','class'=>'form-horizontal','role'=>'form')) }}
      <div class="form-group">
        {{ Form::label('email','Email',array('class'   =>  'col-sm-2 control-label')) }}
        <div class="col-sm-10">
        {{ Form::text('email','',array('class'=>'form-control',"id"=>"inputEmail", "placeholder"=>"Email")) }}
        </div>
      </div>
      <div class="form-group">
        {{ Form::label('orgName','机构名：',array('class'    =>  'col-sm-2 control-label'))  }}
        <div class="col-sm-10">
         {{ Form::text('orgName','',array('class'=>'form-control',"id"=>"inputUserName", "placeholder"=>"机构名：")) }}
        </div>
      </div>
      <div class="form-group">
        {{ Form::label('password','密码：',array('class'    =>  'col-sm-2 control-label'))  }}
          <div class="col-sm-10">
          {{ Form::password('password',array('class'=>'form-control',"id"=>"inputPassword", "placeholder"=>"密码：")) }}
          </div>
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation','确认密码：',array('class'    =>  'col-sm-2 control-label'))  }}
          <div class="col-sm-10">
            {{ Form::password('password_confirmation',array('class'=>'form-control',"id"=>"inputPassword2", "placeholder"=>"确认密码：")) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
              {{ Form::checkbox('agree','true') }} 我已阅读
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"><i class="hgy-icon glyphicon glyphicon-user"></i>注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
            <p style="color:red;">{{ $errors->first() }}</p>
          </div>
        </div>
    {{ Form::close() }}
</div>
