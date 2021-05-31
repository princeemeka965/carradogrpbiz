<template>
  <div class="w-full pt-5 pb-5">
    <div class="flex">
      <back-button
        label="Back"
        @onClick="$router.push({ name: 'OrganisationlGoal' })"
        variant="secondary"
        class="mr-4"
      />
      <div
        class="mt-4"
        style="border-left: 1px solid #878E99; height:1.5rem"
      />

      <div style="width: 150px">
        <h1
          class="text-xl  text-left font-extrabold ml-4 mt-3"
        >
          New Goal
        </h1>
      </div>

      <div class="mt-4 pr-3">
        <icon
          :icon-name="moreIcon"
          size="xsm"
        />
      </div>

      <div class="w-7/12 mt-4">
        <Breadcrumb :items="breadcrumbs" />
      </div>
    </div>
    <div class="px-3">
      <card class="p-5 mt-6 ">
        <p class="text-lg font-bold">
          Goal Details
        </p>
        <div
          class="grid grid-cols-12 gap-7"
          style="margin-top:1.125rem"
        >
          <div class="col-span-6">
            <div class="text-sm text-jet">
              Goal
            </div>
            <c-text
              placeholder="--Enter--"
              variant="w-full"
            />
          </div>
          <div class="col-span-6">
            <div class="text-sm text-jet">
              Template
            </div>
            <c-select
              placeholder="--Select Template--"
              variant="w-full"
            />
          </div>
        </div>

        <div
          class="w-full p-2 h-auto flex flex-col mt-5"
          style="border: 1px dashed #878E99; border-radius: 5px"
        >
          <div class="w-11/12 h-6 p-1 flex cyc-text">
            CYCLE DETAILS
          </div>
          <div class="w-11/12 h-6 p-1 mt-4 mb-3 inner-text">
            --Select a Performance Template to view Appraisal Cycle details here---
          </div>
        </div>
      </card>
    </div>
    <div class="px-3">
      <card class="p-5 mt-1">
        <div class="w-full h-10 mt-2">
          <h1 class="text-base font-bold">
            KPAs
          </h1>
        </div>
        <div
          style="border-bottom: 1px solid #878E99; height:1.5rem"
        />

        <card class="p-5 mt-8">
          <div
            class="w-full h-auto flex flex-col"
            style="align-items: center"
          >
            <div
              class="w-5/12 h-auto mb-4 mt-4 flex"
              style="justify-content: center"
            >
              <icon
                :icon-name="illustration"
                size="xlg"
                class-name="icon-Size mb-2"
              />
            </div>
            <div class="w-6/12 h-auto illu-text">
              You set organizational goals and objectives here. KPAs appear here when you select a
              template. You can edit selected template based on permissions assigned.
              Select a template to get started.
            </div>
          </div>
        </card>
      </card>
    </div>
    <div class="pl-3 flex flex-row button-layout">
      <Button
        class="btn-disabled"
        style="color: #878E99; width: 8rem; padding: 12px 15px"
      >
        Save
      </Button>
      <Button
        background-color="none"
        class="ml-4"
        style="color: #321C3B; width: 8rem; padding: 12px 15px"
      >
        Cancel
      </Button>
    </div>
  </div>
</template>

<script>
import BackButton from '@scelloo/cloudenly-ui/src/components/back-button';
import CText from '@scelloo/cloudenly-ui/src/components/text';
import CSelect from '@scelloo/cloudenly-ui/src/components/select';
import Breadcrumb from '@scelloo/cloudenly-ui/src/components/bread-crumb';
import Card from '@/components/Card';
import Icon from "@/components/Icon";
import Button from "@/components/Button";

export default {
  components: {
    BackButton, Card, CText, CSelect, Breadcrumb, Icon, Button
  },
  data() {
    return {
      breadcrumbs: [
        {
          disabled: false, text: "Performance", href: "performance", id: "Performance"
        },
        {
          disabled: false, text: "Organizational Goals and Objectives", href: "Goals", id: "Goals"
        },
        {
          disabled: true, text: "New Goal", id: "New goal"
        },
      ],

      illustration: 'illustration',
      moreIcon: 'more_icon',
    };
  },
};
</script>

<style>

.cyc-text {
  font-size: 12px;
  font-weight: 900;
  line-height: 1.3rem;
  color: #878E99;
}

.inner-text{
  font-size: 12px;
  line-height: 1.9rem;
  font-weight: 600;
  text-align: center;
  color: #878E99;
  text-transform: uppercase;
}

.icon-Size{
  width : 200px;
  height: 200px;
}

.illu-text
{
  text-align: center; font-weight: 400; line-height: 19px;
  font-size: 16px;
  letter-spacing: 0.015em;
}

.button-layout
{
  width: 270px; height: 44px; margin-top: 29px;
}

.btn-disabled
{
  background-color: #eeeeee;
  font-size: 16px;
  cursor: disabled;
}

</style>
