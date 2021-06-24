<template>
  <div class="Card">
    <div class="container">
      Card
      <MDBCard>
        <MDBCardBody>
          <MDBCardTitle>Card title</MDBCardTitle>
          <MDBCardText>
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </MDBCardText>
          <MDBBtn color="primary">Button</MDBBtn>
        </MDBCardBody>
      </MDBCard>
    </div>
  </div>
</template>

<script>
import {
  MDBCard,
  MDBCardBody,
  MDBCardTitle,
  MDBCardText,
  MDBBtn,
} from "mdb-vue-ui-kit";
export default {
  name: "FooterPage",
  components: {
    MDBCard,
    MDBCardBody,
    MDBCardTitle,
    MDBCardText,
    MDBBtn,
  },
};
</script>


<style scoped>
</style>
