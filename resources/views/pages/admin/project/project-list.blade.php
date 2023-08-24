<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Projects List</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#ProjectCreateModal"><i
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
                    <th>Title</th>
                    <th>PreviewLink</th>
                    <th>thumbailLink</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="project-itemList">
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{-- inclued add new education modal --}}
@include('pages.admin.project.create')
{{-- inclued update education modal --}}
@include('pages.admin.project.edit')
<script>
    getProjectList();
    async function getProjectList() {
        let URL = '/projectsData';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                document.getElementById('project-itemList').innerHTML = "";

                list.forEach((item) => {
                    let shortContent = '';
                    shortContent = excerpt(item['details']);
                    document.getElementById('project-itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['title']}</td>
                    <td>${item['previewLink']}</td>
                    <td>${item['thumbnailLink']}</td>
                    <td>${shortContent}</td>
                    <td>
                        <span onclick="ProjectfillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ProjectUpdateModal"><i class="fa fa-edit"></i></span>
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
        let URL = `/admin/projectpage/projectDelete/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('project-itemList').innerHTML = "";
                await getProjectList();
            }
            message('success', 'Education deleted successfully');
        } catch (error) {

        }
    }
    //excerpt
    function excerpt(text) {
        return text.substring(0, 30);
    }
</script>
