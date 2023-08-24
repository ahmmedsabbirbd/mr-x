<div class="modal fade" id="LanguageUpdateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Language</h4>
                <button type="button" id="language_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Language</label>
                    <input type="text" id="language_name" class="form-control">
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="updateLanguage()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Update</button>
            </div>
        </div>
    </div>
</div>
<script>
    //get all data for edit
    async function LanguagefillExistingData(id) {
        let URL = `/admin/resumepage/showLanguage/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                console.log(res);
                let item = res.data;
                document.getElementById('id').value = item['id'];
                document.getElementById('language_name').value = item['name'];
            }
        } catch (error) {

        }
    }
    // update experience
    async function updateLanguage() {
        let id = document.getElementById('id').value;
        let name = document.getElementById('language_name').value;

        const formData = {
            id: id,
            name: name
        }

        let URL = `/admin/resumepage/updateLanguage/` + id;
        try {
            loading();
            let res = await axios.put(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('language_closeBtn').click();
                document.getElementById('language-itemList').innerHTML = "";
                await getLanguageList();
                message('success', 'Language updated successfully');
            }
        } catch (error) {
            message('error', 'Something went wrong');
        }
    }
</script>
