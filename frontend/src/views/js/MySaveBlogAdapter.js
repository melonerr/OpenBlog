import axios from "axios";

class MySaveBlogAdapter {
    static saveData(Blogdata) {
        const dataInsert = new FormData();
        dataInsert.append("title", Blogdata.title);
        dataInsert.append("imgcover", "http://localhost:8081/assets/image/blog/holder.png");
        dataInsert.append("content", Blogdata.data);
        dataInsert.append("writer", Blogdata.writer);
        dataInsert.append("date", Blogdata.date);
        dataInsert.append("permalink", "permalink");
        dataInsert.append("status", Blogdata.status);
        axios
            .post(`http://localhost:8081/blog-insert`, dataInsert)
            .then(function(response) {
                console.log(response.data);
            });
    }
}

export default MySaveBlogAdapter;