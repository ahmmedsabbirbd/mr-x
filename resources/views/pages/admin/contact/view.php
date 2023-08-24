<div class="modal fade" id="ContactViewModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Message View</h4>
                <button type="button" id="education_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input readonly type="text" id="fullName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input readonly type="text" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Field</label>
                    <input readonly id="phone" cols="10" rows="5" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea readonly id="message" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //get all data for edit
    async function ContactMessagefillExistingData(id) {
        let URL = `/admin/contactpage/getContactMessage/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let item = res.data['data'];
                document.getElementById('fullName').value = item['fullName'];
                document.getElementById('email').value = item['email'];
                document.getElementById('phone').value = item['phone'];
                document.getElementById('message').innerText = item['message'];

            }
        } catch (error) {

        }
    }
</script>
