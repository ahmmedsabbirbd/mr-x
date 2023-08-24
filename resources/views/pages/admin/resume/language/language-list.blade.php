<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Languages List</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#LanguageCreateModal"><i
                        class="fa fa-plus-circle"></i> Add New</span>
                <div class="input-group-append">
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Language Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="language-itemList">

                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{-- inclued add new language modal --}}
@include('pages.admin.resume.language.create')
{{-- inclued update language modal --}}
@include('pages.admin.resume.language.edit')
<script>
    getLanguageList();
    async function getLanguageList() {
        let URL = '/languagesData';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                document.getElementById('language-itemList').innerHTML = "";

                list.forEach((item) => {
                    document.getElementById('language-itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['name']}</td>
                    <td>
                        <span onclick="LanguagefillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#LanguageUpdateModal"><i class="fa fa-edit"></i></span>
                        <span onclick="deleteItem('${item['id']}')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span>
                    </td>
                </tr>`)
                });
            }
        } catch (error) {
            console.log(error);
        }
    }
    //delete data
    async function deleteItem(id) {
        let URL = `/admin/resumepage/languageDelete/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('language-itemList').innerHTML = "";
                await getLanguageList();
            }
            message('success', 'Language deleted successfully');
        } catch (error) {

        }
    }
    //excerpt
    function excerpt(text) {
        return text.substring(0, 30);
    }
</script>
