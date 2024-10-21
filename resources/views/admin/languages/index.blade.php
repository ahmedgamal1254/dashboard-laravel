@extends("admin.layouts.dashboard")

@section("content")
<div class="app-content content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card"  style="padding: 25px;">
                    <table class="table table-de mb-0 table-striped table-hover" id="languages_table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name En</th>
                                <th>Native Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- Modal to add new record -->
            @include("admin.languages.add")

            @include("admin.languages.edit")

            <div class="row">
                <button type="button" class="btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in">
                    <i class="fa fa-plus"></i> اضافة لغة جديدة
                </button>
            </div>
        </div>
    </div>
</div>

@php
$lang=request()->segment(1);
@endphp
@endsection

@section("script")
<script>
        var table=$('#languages_table').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            destroy:true,
            pageLength: 15, // Set default page length
            lengthMenu: [1,2,5, 10, 25, 50, 100], // Set available page sizes
            ajax: '{!! route('languages.getdata',$lang) !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name_en', name: 'name_en' },
                { data: 'native_name', name: 'native_name' },
                { data: 'status', name: 'status' },
                {
                    data: null,
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button type="button" class="btn btn-primary edit_lang" data-id="${row.id}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_${row.id}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <div class="modal fade" id="delete_${row.id}" tabindex="-1" role="dialog" aria-labelledby="delete_${row.id}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">حذف العنصر</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        هل تريد حذف هذا العنصر ؟
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" data-href="${row.id}" class="btn btn-danger delete">delete <i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    }
                }
            ],
            language: {
                paginate: {
                    "next": "<i class='fa-solid fa-arrow-left'></i>",
                    "previous": "<i class='fa-solid fa-arrow-right'></i>"
                },
                lengthMenu: "عرض _MENU_ لغات لكل صفحة",
                zeroRecords: "لا يوجد بيانات",
                info: "عرض _START_ إلى _END_ من _TOTAL_ لغات",
                infoEmpty: "لا يوجد سجلات متاحة",
                infoFiltered: "(تمت تصفيته من _MAX_ إجمالي اللغات)",
                search: "",
                processing:"جارى المعالجة"
            },
            // pagingType: 'full_numbers',
            initComplete: function() {
                // Move the search input field to the custom div
                $('#languages_table_filter').appendTo('.custom-search-wrapper');
                $('#languages_table_filter input').attr('placeholder', "ابحث...");
                $("#languages_table_filter input").addClass("form-control")
            }
        });


        function refreshTable() {
            table.ajax.reload(null, false); // False to prevent resetting pagination
        }

        document.getElementById("add_language").addEventListener("submit",function (e){
            e.preventDefault()

            $.ajax({
                url: "{!! route("languages.store",$lang) !!}",
                type: 'post',
                data:$(this).serialize(),
                beforeSend: function () {
                    $(".loader").show();
                },
                success: function(data) {
                    swal(data["message"])

                    $("#success")[0].play()

                    refreshTable()

                    document.getElementById("add_language").reset()
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle any errors
                    console.log('Error:', textStatus, errorThrown);
                },
                complete: function () {
                    $(".loader").hide('slow');
                }
            });
        })


        $(document).ready(function () {
            $(document).on('click', '.check_status', function(e) {
                let _this=$(this)
                $.ajax({
                    url: "{!! route("languages.status",$lang) !!}",
                    type: 'post',
                    data:{
                        "_token":"{{ csrf_token() }}",
                        "id":_this.data("id"),
                        "status":_this.val()
                    },
                    beforeSend: function () {
                        $(".loader").show();
                    },
                    success: function(data) {
                        swal(data["message"])

                        $("#success")[0].play()
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors
                        console.log('Error:', textStatus, errorThrown);
                    },
                });
            })

            let app="{{ env("APP_URL") }}"
            let lang="{{ $lang }}"
            $(document).on("click",".edit_lang",function(){
                $('#edit_language').modal('show');

                let val=$(this).data("id")
                $.ajax({
                    url: app + `/${lang}/languages/edit/${val}`,
                    type: 'get',
                    beforeSend: function (){
                        $("#load_data").show()
                    },
                    success: function(data) {
                        $("#name_en").val(data["data"]["name_en"])
                        $("#name_native").val(data["data"]["native_name"])
                        $("#lang_id").val(data["data"]["id"])
                        $("#icon").val(data["data"]["icon"])
                        $("#lang").val(data["data"]["language"])

                        $("#load_data").hide()
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors
                        console.log('Error:', textStatus, errorThrown);

                        $("#load_data").hide()
                    },
                    complete: function (){
                        $("#load_data").hide()
                    }
                });
            });

            $(document).on("submit","#update_language",function(e){
                e.preventDefault()

                $.ajax({
                    url: "{!! route("languages.update",$lang) !!}",
                    type: 'post',
                    data:$(this).serialize(),
                    beforeSend: function () {
                        $(".loader").show();
                    },
                    success: function(data) {
                        swal(data["message"])

                        $("#success")[0].play()

                        refreshTable()
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors
                        console.log('Error:', textStatus, errorThrown);
                    },
                    complete: function () {
                        $(".loader").hide('slow');
                    }
                });
            });

            $(document).on("click","#close_modal",function (){
                $("#edit_language").modal('hide');

               document.getElementById("#update_language").reset()
            })

            $(document).on('click', '.delete', function() {
                let _this=$(this).closest("tr");
                _this.remove()

                $.ajax({
                    url: app + `/${lang}/languages/destroy/${$(this).attr("data-href")}`,
                    type: 'get',
                    success: function(data) {
                        $(".modal-backdrop").remove()

                        swal("تم الحذف بنجاح")
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors
                        console.log('Error:', textStatus, errorThrown);

                        $(".modal-backdrop").remove()
                    },
                });

            })
        })
</script>
@endsection
