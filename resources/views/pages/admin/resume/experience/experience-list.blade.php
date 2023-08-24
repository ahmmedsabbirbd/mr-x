<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Exprience List</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#createModal"><i
                        class="fa fa-plus-circle"></i> Add New</span>
                <div class="input-group-append">
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Duration</th>
                    <th>Institute Name</th>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="itemList">
            </tbody>
        </table>
    </div>
</div>
{{-- inclued add new experience modal --}}
@include('pages.admin.resume.experience.create')
{{-- inclued update experience modal --}}
@include('pages.admin.resume.experience.edit')
<script>
    getExperienceList();
    async function getExperienceList() {
        let URL = '/experiencesData';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                list.forEach((item) => {
                    let shortContent = '';
                    shortContent = excerpt(item['details']);
                    document.getElementById('itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['duration']}</td>
                    <td>${item['title']}</td>
                    <td>${item['designation']}</td>
                    <td>${shortContent}</td>
                    <td>
                        <span onclick="fillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit"></i></span>
                        <span onclick="ExperienceDeleteItem('${item['id']}')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span>
                    </td>
                </tr>`)
                });
            }
        } catch (error) {
            console.log(error);
        }
    }
    //delete data
    async function ExperienceDeleteItem(id) {
        let URL = `/admin/resumepage/experienceDelete/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('itemList').innerHTML = "";
                await getExperienceList();
            }
            message('success', 'Experience deleted successfully');
        } catch (error) {

        }
    }
    //excerpt
    function excerpt(text) {
        return text.substring(0, 30);
    }
</script>
