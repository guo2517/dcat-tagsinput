<style>
    .bootstrap-tagsinput {
        border-radius: 4px;
        width: 100%;
        line-height: 24px;
        cursor: text;
        border:1px solid #dbe3e6;

    }
    .bootstrap-tagsinput .tag {
        background-color:#586CB1;
        margin-bottom:3px;
        display:inline-block;
        line-height: 18px;
        font-size:92%;
    }
    .bootstrap-tagsinput {
        display: block;
    }
</style>


<div class="{{$viewClass['form-group']}}">

    <div class="{{$viewClass['label']}} control-label">
        <span>{!! $label !!}</span>
    </div>

    <div class="{{$viewClass['field']}}">
        @include('admin::form.error')

        <div class="input-group">

            <input {!! $attributes !!} />
        </div>

        @include('admin::form.help-block')

    </div>
</div>
