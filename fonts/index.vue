<template>
  <div class="w-full h-full pt-5">
    <div class="flex">
      <h1 class="text-xl text-left font-extrabold pl-4 mr-8">
        Organizational Goals and Objectives
      </h1>
      <Breadcrumb :items="breadcrumbs" />
    </div>

    <div
      style="height:100%"
      v-if="loadingData"
    >
      <loader size="xxs" />
    </div>
    <div v-else>
      <div class="mx-3 mt-6">
        <Card class="mt-6 p-5">
          <div
            class="flex mb-6"
            style="justify-content: flex-end;"
          >
            <Button
              class="bg-flame text-white"
              @click="$router.push({ name: 'New goal' })"
            >
              Create New
            </Button>
            <Button
              background-color="none"
              class="text-flame ml-4 "
              border="1px solid #F15A29"
            >
              Performance History
            </Button>
          </div>
          <template v-slot:footer>
            <card-footer />
          </template>
        </Card>
      </div>
      <div class="w-full h-full p-3" />
    </div>

    <right-side-bar
      v-if="openModal"
      @close="openModal = false"
      close-button
    >
      <template v-slot:title>
        <p class="text-darkPurple">
          KPA Summary
        </p>
      </template>
      <template v-slot:subtitle>
        <p class="font-semibold text-darkPurple capitalize">
          {{ kpaSummary ? kpaSummary.name : null }}
        </p>
        <p class="font-semibold text-darkPurple">
          KPA summary listed for selected function.
        </p>
        <p class="font-semibold text-darkPurple">
          Last Edited:
        </p>
      </template>
      <div>
        <p class="text-darkPurple">
          KPA Descriptions
        </p>
        <div v-if="kpaSummary.kpis.length > 0">
          <ol>
            <li
              v-for="(kpis, index) in kpaSummary.kpis"
              :key="index"
            >
              {{ kpis.name }}
            </li>
          </ol>
        </div>
        <p v-else>
          No KPA Sumamry found
        </p>
      </div>
    </right-side-bar>
  </div>
</template>

<script>
/* eslint-disable vue/no-unused-components */
import Button from '@/components/Button';
import Card from '@/components/Card';
import Breadcrumb from '@scelloo/cloudenly-ui/src/components/bread-crumb';
import Table from '@scelloo/cloudenly-ui/src/components/table';
import CardFooter from '@/components/CardFooter';
import Loader from '@/components/Loader';
import Icon from '@/components/Icon';
import RightSideBar from '@/components/RightSideBar';

export default {
  name: 'Function',
  // eslint-disable-next-line vue/no-unused-components
  components: {
    Breadcrumb,
    Button,
    Card,
    Table,
    CardFooter,
    Loader,
    Icon,
    RightSideBar,
  },
  data() {
    return {
      perfArray: [],
      openModal: false,
      kpaSummary: {},
      loadingData: true,
      PerfHeader: [
        { title: 'Goal Title', value: 'name' },
        { title: 'Appraisal Cycle', value: 'hierarchy' },
        { title: 'KPAs', value: 'costCenter' },
        { title: 'Date Created', value: 'reportsTo' },
        { title: '', value: 'id', image: true },
      ],
      breadcrumbs: [
        {
          disabled: false, text: "Performance", href: "Performance", id: 'Performance'
        },
        {
          disabled: false, text: "Organizational Goals", href: "goals", id: 'Goals'
        },

      ],
    };
  },
  methods: {
    createKpaSummary(kpis, name) {
      this.kpaSummary = { kpis, name };
      this.openModal = true;
    },
  },

};
</script>

<style scoped>
.custom-radius {
  border-radius: 7px;
}
.button:focus {
  outline: none;
}
</style>
