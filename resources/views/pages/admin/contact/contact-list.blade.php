<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Contacts List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="contact-itemList">
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@include('pages.admin.contact.view')
<script>
    getContactMessageList();
    async function getContactMessageList() {
        let URL = '/admin/contactpage/contactMessageList';
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                let list = res.data['data'];
                document.getElementById('contact-itemList').innerHTML = "";

                list.forEach((item) => {
                    let shortContent = '';
                    shortContent = excerpt(item['message']);
                    document.getElementById('contact-itemList').innerHTML += (`<tr>
                    <td>${item['id']}</td>
                    <td>${item['fullName']}</td>
                    <td>${item['email']}</td>
                    <td>${item['phone']}</td>
                    <td>${shortContent}</td>
                    <td>
                        <span onclick="ContactMessagefillExistingData('${item['id']}')" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ContactViewModal"><i class="fa fa-edit"></i></span>
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
        let URL = `/admin/contactpage/getContactMessage/` + id;
        try {
            loading();
            let res = await axios.delete(URL);
            loading(false);
            if (res.status === 200) {
                document.getElementById('contact-itemList').innerHTML = "";
                await getContactMessageList();
            }
            message('success', 'Contact deleted successfully');
        } catch (error) {

        }
    }
    //excerpt
    function excerpt(text) {
        return text.substring(0, 30);
    }
</script>
