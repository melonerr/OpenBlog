<template>
  <div>
    <mdb-container>
      <mdb-row>
        <mdb-col sm="4">
          <mdb-card wide>
            <mdb-view hover cascade>
              <a href="#!">
                <mdb-card-image
                  src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg"
                  alt="Card image cap"
                ></mdb-card-image>
                <mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
              </a>
            </mdb-view>
            <mdb-card-body class="text-center" cascade>
              <mdb-card-title><strong>Alison Belmont</strong></mdb-card-title>
              <h5 class="blue-text"><strong>Graffiti Artist</strong></h5>
              <mdb-card-text
                >Sed ut perspiciatis unde omnis iste natus sit voluptatem
                accusantium doloremque laudantium, totam rem
                aperiam.</mdb-card-text
              >
              <a class="icons-sm li-ic"><mdb-icon fab icon="linkedin" /></a>
              <a class="icons-sm tw-ic"><mdb-icon fab icon="twitter" /></a>
              <a class="icons-sm fb-ic"><mdb-icon fab icon="facebook" /></a>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col sm="4">
          <mdb-card narrow>
            <mdb-view hover cascade>
              <a href="#!">
                <mdb-card-image
                  src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                  alt="Card image cap"
                ></mdb-card-image>
                <mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
              </a>
            </mdb-view>
            <mdb-card-body cascade>
              <h5 class="pink-text pb-2 pt-1">
                <mdb-icon icon="utensils" /> Culinary
              </h5>
              <mdb-card-title
                ><strong>Cheat day inspirations</strong></mdb-card-title
              >
              <mdb-card-text
                >Ut enim ad minima veniam, quis nostrum exercitationem ullam
                corporis suscipit laboriosam, nisi ut aliquid ex ea
                commodi.</mdb-card-text
              >
              <mdb-btn color="unique">Button</mdb-btn>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col sm="4">
          <mdb-card cascade>
            <mdb-view hover cascade>
              <a href="#!">
                <mdb-card-image
                  src="https://mdbootstrap.com/img/Photos/Others/men.jpg"
                  alt="Card image cap"
                ></mdb-card-image>
                <mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
              </a>
            </mdb-view>
            <mdb-card-body class="text-center" cascade>
              <mdb-card-title><strong>Billy Cullen</strong></mdb-card-title>
              <h5>Web developer</h5>
              <mdb-card-text
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus, ex, recusandae. mdbIconcere modi sunt, quod
                quibusdam.</mdb-card-text
              >
              <mdb-btn tag="a" floating small class="btn-fb"
                ><mdb-icon fab icon="facebook"
              /></mdb-btn>
              <mdb-btn tag="a" floating small class="btn-tw"
                ><mdb-icon fab icon="twitter"
              /></mdb-btn>
              <mdb-btn tag="a" floating small class="btn-dribbble"
                ><mdb-icon fab icon="dribbble"
              /></mdb-btn>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
      </mdb-row>
    </mdb-container>
  </div>
</template>

<script>
import {
  mdbContainer,
  mdbRow,
  mdbCol,
  mdbCard,
  mdbCardImage,
  mdbCardHeader,
  mdbCardBody,
  mdbCardTitle,
  mdbCardText,
  mdbCardFooter,
  mdbCardUp,
  mdbCardAvatar,
  mdbCardGroup,
  mdbBtn,
  mdbView,
  mdbMask,
  mdbIcon,
} from "mdbvue";
export default {
  name: "CardProPage",
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbCard,
    mdbCardImage,
    mdbCardHeader,
    mdbCardBody,
    mdbCardTitle,
    mdbCardText,
    mdbCardFooter,
    mdbCardUp,
    mdbCardAvatar,
    mdbCardGroup,
    mdbBtn,
    mdbView,
    mdbMask,
    mdbIcon,
  },
};
</script>

<style>
</style>