<div class="modal fade" id="LanguageCreateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Education</h4>
                <button type="button" id="LanguageCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Language</label>
                    <input type="text" id="language_name_crate" class="form-control">
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="LanguageCreateSubmitData()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //store data
    async function LanguageCreateSubmitData() {
        let name = document.getElementById('language_name_crate').value;

        const formData = {
            name: name
        }

        let URL = `/admin/resumepage/language`;
        try {
            loading()
            let res = await axios.post(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('LanguageCloseBtn').click();
                document.getElementById('name').value = "";
                await getLanguageList();
                message('success', 'Language created successfully');
            }
        } catch (error) {
            loading(false);
            message('error', 'Something Went Wrong!');
        }
    }
</script>
