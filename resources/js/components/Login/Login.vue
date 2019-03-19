<template>
  <v-form @submit.prevent="login">
    <v-container>
      <v-layout>
        <v-flex
          xs12
          md12
        >
          <v-text-field
            v-model="form.email"
            label="E-mail"
            type="email"
            required
          ></v-text-field>
        </v-flex>
                <v-flex
          xs12
          md12
        >
          <v-text-field
            v-model="form.password"
            label="Password"
            type="password"
            required
          ></v-text-field>
        </v-flex>
      </v-layout>

    <v-btn
    color="Green"
    type="submit"
    >Login</v-btn>
    </v-container>
  </v-form>
</template>


<script>
  export default {
      data(){
          return{
              form:{
                  email:null,
                  password:null
              }
          }
        },
        methods:
        {
            login(){
                User.login(this.form)
            }
        }
    }
</script>

<style>

</style>
