<div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0"
        id="add_language"
        @php
            $lang=request()->segment(1)
        @endphp
        data-action="{{ route("languages.store",$lang) }}" method="post">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">لغة جديدة</h5>
            </div>
            @csrf
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">اسم اللغة بالانجليزية</label>
                    <input
                    name="name_en"
                    type="text"
                    class="form-control dt-full-name"
                    id="basic-icon-default-fullname"
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
                    id="basic-icon-default-fullname"
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
                    id="basic-icon-default-fullname"
                    placeholder="اللغة العربية"
                    aria-label="John Doe"
                    />
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 p-relative">
                    <span class="loader" style="display: none;"></span>
                    حفظ</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">غلق</button>
            </div>
        </form>
    </div>
</div>
