import axios from "axios";

/**
 * Customized upload picture plugin
 */
class MyUploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }

    async upload() {
        const data = new FormData();
        data.append("file", await this.loader.file);
        const res = await axios({
            url: `http://localhost:8081/imgblogcontent`,
            method: "post",
            data,
            headers: {
                'accept': 'application/json',
                'Accept-Language': 'en-US,en;q=0.8',
                'Content-Type': `multipart/form-data;`,
            }
        });

        console.log(res.data);

        return {
            default: res.data.url,
        };
    }
}

export default MyUploadAdapter;