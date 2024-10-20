<div class="modal modal-slide-in fade" id="edit_language" tabindex="-1" role="dialog" aria-labelledby="edit_language" aria-hidden="true">
    <div class="modal-dialog sidebar-sm">
        @php
        $lang=request()->segment(1)
    @endphp
        <form class="add-new-record modal-content pt-0"
        id="update_language"
        data-action="{{ route("languages.update",$lang) }}" method="post">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">تحديث البيانات</h5>
            </div>
            @csrf
            <span id="load_data" style="display: none;">جارى تحميل البيانات ....</span>

            <input type="hidden" name="id" id="lang_id">
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">اسم اللغة بالانجليزية</label>
                    <input
                    name="name_en"
                    type="text"
                    class="form-control dt-full-name"
                    id="name_en"
                    placeholder="arabic"
                    aria-label="John Doe"
                    />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">اسم المختصر</label>
                    <input
                    name="icon"
                    type="text"
                    class="form-control dt-full-name"
                    id="icon"
                    placeholder="ar"
                    aria-label="John Doe"
                    />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">اسم اللغة الأضلى</label>
                    <input
                    type="text"
                    name="name_native"
                    class="form-control dt-full-name"
                    id="name_native"
                    placeholder="اللغة العربية"
                    aria-label="John Doe"
                    />
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1  p-relative">
                    <span class="loader" style="display: none;"></span>
                    حفظ</button>
                <button type="reset" class="btn btn-outline-secondary" id="close_modal" data-dismiss="modal">
                    غلق</button>
            </div>
        </form>
    </div>
</div>
