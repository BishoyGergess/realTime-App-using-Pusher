<template>
    <v-toolbar>
    <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
    <v-toolbar-title>SPA</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">
        <router-link to="/form">
            <v-btn flat>Fourm</v-btn>
        </router-link>
        <router-link to="/ask">
            <v-btn flat>Ask Question</v-btn>
        </router-link>
        <router-link to="/category">
            <v-btn flat>Category</v-btn>
        </router-link>
      <router-link to="/login">
        <v-btn flat>Login</v-btn>
      </router-link>
    </div>
  </v-toolbar>
</template>

<script>
export default {

}
</script>

<style>

</style>
