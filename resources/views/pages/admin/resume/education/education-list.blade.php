<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Education List</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#EducationCreateModal"><i
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
                    <th>Duration</th>
                    <th>Institute Name</th>
                    <th>Address</th>
                    <th>Field</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="education-itemList">
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{-- inclued add new education modal --}}
@include('pages.admin.resume.education.create')
{{-- inclued update education modal --}}
@include('pages.admin.resume.education.edit')
<script>
    getEducationList();
    async function getEducationList() {
        let URL = '/educationsData';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                document.getElementById('education-itemList').innerHTML = "";

                list.forEach((item) => {
                    let shortContent = '';
                    shortContent = excerpt(item['details']);
                    document.getElementById('education-itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['duration']}</td>
                    <td>${item['institutionName']}</td>
                    <td>${item['address']}</td>
                    <td>${item['field']}</td>
                    <td>${shortContent}</td>
                    <td>
                        <span onclick="EducationfillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#EducationUpdateModal"><i class="fa fa-edit"></i></span>
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
        let URL = `/admin/resumepage/educationDelete/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('education-itemList').innerHTML = "";
                await getEducationList();
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
