<div class="form-group">
    <div>
        {!! Form::label('slug') !!}
        {!! Form::text('slug',null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div>{!! Form::label('excerpt') !!}
        {!! Form::textarea('excerpt',null,['class'=>'form-control']) !!}
        {!! Form::label('content') !!}
    </div>
    <div>{!! Form::textarea('content',null,['class'=>'form-control']) !!}
        {!! Form::label('published') !!}
        {!! Form::checkbox('published',null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('published_at') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div>{!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
    </div>

</div>