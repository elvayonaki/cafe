@php $days = [ ['key'=>1,'name'=>'senin'], ['key'=>2,'name'=>'selasa'], ['key'=>3,'name'=>'rabu'], ['key'=>4,'name'=>'kamis'],
['key'=>5,'name'=>'jum\'at'], ['key'=>6,'name'=>'sabtu'], ['key'=>7,'name'=>'minggu'] ]; @endphp

<div class="row form-group">
    <div class="col col-md-3">
        <label class=" form-control-label">Jam Kerja</label>
    </div>
    <div class="col col-md-9">
        @foreach($days as $day)
        <div class="row">
            <div class="col-2 checkbox">
                <label for="checkbox1" class="form-check-label ">
                    <input type="checkbox" id="checkbox1" name="day[{{$day['key']}}]" value="option1" class="form-check-input">&nbsp;&nbsp;{{$day['name']}}
                </label>
            </div>
            <div class="col-9">
                    Open : <input type="time" name=day[{{$day[ 'key']}}]['open'] />
                    Close :<input type="time" name=day[{{$day[ 'key']}}]['close']/>
            </div>
        </div>
        @endforeach
    </div>
</div>
