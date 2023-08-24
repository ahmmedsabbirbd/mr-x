<div class="modal fade" id="SkillCreateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Education</h4>
                <button type="button" id="SkillCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Skill</label>
                    <input type="text" id="name" class="form-control">
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="SkillCreateSubmitData()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //store data
    async function SkillCreateSubmitData() {
        let name = document.getElementById('name').value;

        const formData = {
            name: name
        }

        let URL = `/admin/resumepage/skill`;
        try {
            loading()
            let res = await axios.post(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('SkillCloseBtn').click();
                document.getElementById('name').value = "";
                await getSkillList();
                message('success', 'Skill created successfully');
            }
        } catch (error) {
            loading(false);
            message('error', 'Something Went Wrong!');
        }
    }
</script>
