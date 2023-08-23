<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Skills List</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#SkillCreateModal"><i
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
                    <th>Skill Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="skill-itemList">
                <tr>
                    <td>01</td>
                    <td>Laravel</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{-- inclued add new skill modal --}}
@include('pages.admin.resume.skills.create')
{{-- inclued update skill modal --}}
@include('pages.admin.resume.skills.edit')
<script>
    getSkillList();
    async function getSkillList() {
        let URL = '/skillsData';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                document.getElementById('skill-itemList').innerHTML = "";

                list.forEach((item) => {
                    document.getElementById('skill-itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['name']}</td>
                    <td>
                        <span onclick="SkillfillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#SkillUpdateModal"><i class="fa fa-edit"></i></span>
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
        let URL = `/admin/resumepage/skillDelete/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('skill-itemList').innerHTML = "";
                await getSkillList();
            }
            message('success', 'Skill deleted successfully');
        } catch (error) {

        }
    }
    //excerpt
    function excerpt(text) {
        return text.substring(0, 30);
    }
</script>
