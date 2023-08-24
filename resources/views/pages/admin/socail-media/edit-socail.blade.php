<div>
    <div class="form-group">
        <label for="">Twitter Link</label>
        <input id="twitter" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Github Link</label>
        <input id="github" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Linkedin Link</label>
        <input id="linkedin" type="text" class="form-control">
    </div>
    <div class="form-group">
        <button onclick="socailUpdate()" type="submit" class="btn btn-success float-right">Update</button>
    </div>
</div>
<script>
    getSocailData();
    async function getSocailData() {
        let url = '/socialsData';
        try {
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            let res = await axios.get(url);
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');
            let socailData = res.data.data;
            document.getElementById('twitter').value = socailData['twitterLink'];
            document.getElementById('github').value = socailData['githubLink'];
            document.getElementById('linkedin').value = socailData['linkedinLink'];

        } catch (error) {
            alert(error)
        }
    };

    // hero data update
    async function socailUpdate() {
        let twitter = document.getElementById('twitter').value;
        let github = document.getElementById('github').value;
        let linkedin = document.getElementById('linkedin').value;
        let URL = '/admin/socailmediapage/socail-update';
        try {
            loading();
            let res = await axios.put(URL, {
                twitterLink: twitter,
                githubLink: github,
                linkedinLink: linkedin
            });
            loading(false);
            if (res.status === 200) {
                await getSocailData();
                message('success', 'Socail Updated Successfully');
            }

        } catch (error) {
            loading(false);
            message('error', 'Something went wrong');
        }
    }
</script>
