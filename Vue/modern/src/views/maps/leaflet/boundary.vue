<script>
  import {
    latLngBounds,
    latLng
  } from "leaflet";
  import {
    LMap,
    LTileLayer,
    LMarker
  } from "@vue-leaflet/vue-leaflet";
  export default {
    name: "SetBounds",
    components: {
      LMap,
      LTileLayer,
      LMarker
    },
    data() {
      return {
        zoom: 6,
        center: latLng(47.41322, -1.219482),
        bounds: latLngBounds([
          [40.70081290280357, -74.26963806152345],
          [40.82991732677597, -74.08716201782228]
        ]),
        maxBounds: latLngBounds([
          [40.70081290280357, -74.26963806152345],
          [40.82991732677597, -74.08716201782228]
        ]),
        url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        attribution: '&copy; <BLink href="http://osm.org/copyright">OpenStreetMap</BLink> contributors',
        marker: latLng(47.41322, -1.219482)
      };
    }
  };
</script>

<template>
  <div>
    <l-map :zoom="zoom" :center="center" :bounds="bounds" :max-bounds="maxBounds" style="height: 400px; width: 100%">
      <l-tile-layer :url="url" :attribution="attribution" />
      <l-marker :lat-lng="marker" />
    </l-map>
  </div>
</template>