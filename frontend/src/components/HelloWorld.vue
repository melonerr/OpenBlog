<template>
  <div class="hello">
    <mdbCard>
      <mdbCardImage
        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%286%29.jpg"
        alt="Card image cap"
      ></mdbCardImage>
      <mdbCardBody>
        <mdbCardTitle>Basic card</mdbCardTitle>
        <mdbCardText
          >Some quick example text to build on the card title and make up the
          bulk of the card's content.</mdbCardText
        >
        <mdbBtn color="primary">Button</mdbBtn>
      </mdbCardBody>
    </mdbCard>
  </div>
</template>

<script>
import {
  mdbCard,
  mdbCardImage,
  mdbCardBody,
  mdbCardTitle,
  mdbCardText,
  mdbBtn,
} from "mdbvue";
export default {
  name: "HelloWorld",
  components: {
    mdbCard,
    mdbCardImage,
    mdbCardBody,
    mdbCardTitle,
    mdbCardText,
    mdbBtn,
  },
};
</script>


<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
