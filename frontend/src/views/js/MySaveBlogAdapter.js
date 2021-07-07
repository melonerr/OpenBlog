import axios from "axios";

class MySaveBlogAdapter {
    static saveData(Blogdata) {
        const dataInsert = new FormData();
        dataInsert.append("title", "title name");
        dataInsert.append("imgcover", "http://localhost:8081/assets/image/blog/holder.png");
        dataInsert.append("content", Blogdata.data);
        dataInsert.append("writer", Blogdata.writer);
        dataInsert.append("date", Blogdata.date);
        dataInsert.append("status", Blogdata.status);
        axios
            .post(`http://localhost:8081/blog-insert`, dataInsert)
            .then(function(response) {
                console.log(response.data);
            });
    }
}

export default MySaveBlogAdapter;