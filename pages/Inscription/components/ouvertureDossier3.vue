<template>
  <div>
    <div class='form-group label-floating'>
      <label class='label-floating'> Le gérant et co-gérant(s) sont-ils associés ?</label>
      <select class='form-control'>
        <option disabled='' selected=''></option>
        <option value='oui'>oui</option>
        <option value='non'>non</option>
      </select>
    </div>

    <div class='form-group label-floating'>
      <label class='label-floating'>Le gérant et co-gérant(s) sont-ils rémunérés ? </label>
      <select class='form-control'>
        <option disabled='' selected=''></option>
        <option value='oui'>oui</option>
        <option value='non'>non</option>
      </select>
    </div>

    <div class='form-group label-floating'>
      <label class='label-floating'> Le gérant et co-gérant(s) sont-ils soumis au régime des indépendants ? </label>
      <select class='form-control'>
        <option disabled='' selected=''></option>
        <option value='oui'>oui</option>
        <option value='non'>non</option>
      </select>
    </div>


    <div class='form-group label-floating'>
      <label class='label-floating'>La SARL est-elle une SARL de famille ? </label>
      <select class='form-control'>
        <option disabled='' selected=''></option>
        <option value='oui'>oui</option>
        <option value='non'>non</option>
      </select>
    </div>

    <div class='form-group label-floating'>
      <label class='label-floating'>Le conjoint ou la conjointe est-il (elle) conjoint( e) collaborateur(trice)
        ? </label>
      <select class='form-control'>
        <option disabled='' selected=''></option>
        <option value='oui'>oui</option>
        <option value='non'>non</option>
      </select>
    </div>
  </div>

</template>

<script>


export default {
  name: 'ouvertureDossier3',
  props: {}
}


</script>
