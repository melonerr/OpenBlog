import axios from "axios";

class MySaveBlogAdapter {
    static saveData(Blogdata, imgData) {
        var Count = Blogdata.length;
        const dataInsert = new FormData();
        dataInsert.append("content", Blogdata.data);
        dataInsert.append("writer", Blogdata.writer);
        dataInsert.append("date", Blogdata.date);
        dataInsert.append("count", Count);
        for (let i = 0; i < Count; i++) {
            dataInsert.append([i], imgData[i]);
        };
        axios
            .post(`http://127.0.0.1/teach/adddata.php`, dataInsert)
            .then(function(response) {
                console.log(response.data);
            });
    }
}

export default MySaveBlogAdapter;