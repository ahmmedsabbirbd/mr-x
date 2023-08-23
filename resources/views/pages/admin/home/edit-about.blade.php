<div>
    <div class="form-group">
        <label for="">Title</label>
        <input id="about-title" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea id="about-details" type="text" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button onclick="heroUpdate()" type="submit"  class="btn btn-success float-right">Update</button>
    </div>
</div>
<script>
    getAboutData();
    async function getAboutData() {
        let url = '/aboutData';
        try {
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            let res = await axios.get(url);
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');
            let AboutData = res.data.data;
            document.getElementById('about-title').value = AboutData.title;
            document.getElementById('about-details').value = AboutData.details;

        } catch (error) {
            alert(error)
        }
    };

    // about data update
    async function heroUpdate() {
        let title = document.getElementById('about-title').value;
        let details = document.getElementById('about-details').value;
        let URL = '/admin/homepage/about-update';
        try {
            loading();
            let res = await axios.post(URL, {
                title: title,
                details: details,
            });
            loading(false);
            if (res.status === 200) {
                message('success', 'About Updated Successfully');
                getAboutData();
            }

        } catch (error) {
            loading(false);
            message('error', 'Something went wrong');
        }
    }
</script>
