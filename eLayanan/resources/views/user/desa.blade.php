<div class="form-group">
    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;">
        @foreach($post as $post)
            <option value="{{$post->id}}">{{$post->nama_desa}}</option>
        @endforeach
    </select>
</div>