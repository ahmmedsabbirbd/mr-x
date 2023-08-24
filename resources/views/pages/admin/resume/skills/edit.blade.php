<div class="modal fade" id="SkillUpdateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Skill</h4>
                <button type="button" id="skill_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Skill</label>
                    <input type="text" id="skill_update_name" class="form-control">
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="updateSkill()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Update</button>
            </div>
        </div>
    </div>
</div>
<script>
    //get all data for edit
    async function SkillfillExistingData(id) {
        let URL = `/admin/resumepage/showSkill/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                console.log(res);
                let item = res.data;
                document.getElementById('id').value = item['id'];
                document.getElementById('skill_update_name').value = item['name'];
            }
        } catch (error) {

        }
    }
    // update experience
    async function updateSkill() {
        let id = document.getElementById('id').value;
        let name = document.getElementById('skill_update_name').value;

        const formData = {
            id: id,
            name: name
        }

        let URL = `/admin/resumepage/updateSkill/` + id;
        try {
            loading();
            let res = await axios.put(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('skill_closeBtn').click();
                document.getElementById('skill-itemList').innerHTML = "";
                await getSkillList();
                message('success', 'Skill updated successfully');
            }
        } catch (error) {
            message('error', 'Something went wrong');
        }
    }
</script>
