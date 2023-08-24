<div>
    <div class="form-group">
        <label for="">Key Line</label>
        <input type="text" id="keyLine" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Short Title</label>
        <input type="text" id="short_title" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="" id="">
        <div style="width: 80px; height:80px">
            <img style="width: 100%" src="" id="img" alt="">
        </div>
    </div>
    <div class="form-group">
        <button onclick="heroUpdate()" type="submit" class="btn btn-success float-right">Update</button>
    </div>
</div>
<script>
    getHeroData();
    async function getHeroData() {
        let url = '/heroData';
        try {
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            let res = await axios.get(url);
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');
            let heroData = res.data.data;
            document.getElementById('keyLine').value = heroData.keyLine;
            document.getElementById('short_title').value = heroData.short_title;
            document.getElementById('title').value = heroData.title;
            document.getElementById('img').src = heroData.img;

        } catch (error) {
            alert(error)
        }
    };

    // hero data update
    async function heroUpdate() {
        let keyLine = document.getElementById('keyLine').value;
        let short_title = document.getElementById('short_title').value;
        let title = document.getElementById('title').value;
        let img = document.getElementById('img').src;
        let URL = '/admin/homepage/hero-update';
        try {
            loading();
            let res = await axios.post(URL, {
                keyLine: keyLine,
                title: title,
                short_title: short_title,
                img: img,
            });
            loading(false);
            if (res.status === 200) {
                message('success', 'Hero Updated Successfully');
            }

        } catch (error) {
            loading(false);
            message('error', 'Something went wrong');
        }
    }
</script>
