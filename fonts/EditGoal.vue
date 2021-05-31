<template>
  <div class="w-full pt-5 pb-5">
    <div class="flex">
      <back-button
        label="Back"
        @onClick="$router.push({ name: 'New goal' })"
        variant="secondary"
        class="mr-4"
      />
      <div
        class="mt-4"
        style="border-left: 1px solid #878E99; height:1.5rem"
      />

      <div style="width: 150px">
        <h1
          class="text-xl text-left font-extrabold ml-4 mt-3"
        >
          Edit Goal
        </h1>
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
              value="Swirl Media Organizational Goal for 2021"
            />
          </div>
          <div class="col-span-6">
            <div class="text-sm text-jet">
              Template
            </div>
            <c-text
              label=""
              placeholder=""
              variant="w-full"
              disabled
              value="Performance Template B"
              :input="null"
            />
          </div>
        </div>
        <div
          class="w-full p-2 h-auto flex flex-col mt-5 cycle"
        >
          <div class="w-11/12 flex cycle__text">
            CYCLE DETAILS
          </div>

          <card class="w-full fcard">
            <div class="w-full flex h-auto">
              <div class="fcard__icon">
                <icon
                  :icon-name="doccycle"
                  size="csm"
                />
              </div>
              <div class="w-full flex flex-col h-auto">
                <div
                  class="fcard__header"
                  style="color: #490166;"
                >
                  FY2021 Appraisal Cycle
                </div>
                <div class="w-full fcard__text">
                  Discussed appraisal cycle for the year 2021.
                </div>
              </div>
            </div>
          </card>

          <div class="w-full h-auto flex flex-row">
            <card class="w-6/12 mr-3 fcard">
              <div class="w-full flex h-auto">
                <div class="fcard__icon">
                  <icon
                    :icon-name="calendarIcon"
                    size="csm"
                  />
                </div>
                <div class="w-full flex flex-col h-auto">
                  <div
                    class="fcard__header"
                    style="color: #E99323;"
                  >
                    Cycle Period
                  </div>
                  <div class="w-full fcard__text">
                    January 09, 2021 - December 24, 2021
                  </div>
                </div>
              </div>
            </card>

            <card class="w-6/12 fcard">
              <div class="w-full flex h-auto">
                <div class="fcard__icon">
                  <icon
                    :icon-name="reviewIcon"
                    size="csm"
                  />
                </div>
                <div class="w-full flex flex-col h-auto">
                  <div
                    class="fcard__header"
                    style="color: #2176FF;"
                  >
                    First Appraisal
                  </div>
                  <div class="w-full fcard__text">
                    February 02, 2021 - February 17, 2021
                  </div>
                </div>
              </div>
            </card>
          </div>

          <div class="w-full h-auto flex flex-row">
            <card class="w-6/12 mr-3 fcard">
              <div class="w-full flex h-auto">
                <div class="fcard__icon">
                  <icon
                    :icon-name="starreviewIcon"
                    size="csm"
                  />
                </div>
                <div class="w-full flex flex-col h-auto">
                  <div
                    class="fcard__header"
                    style="color: #4EA4F4;"
                  >
                    Mid-year Review
                  </div>
                  <div class="w-full fcard__text">
                    June 12, 2021 - July 31, 2021
                  </div>
                </div>
              </div>
            </card>

            <card class="w-6/12 fcard">
              <div class="w-full flex h-auto">
                <div class="fcard__icon">
                  <icon
                    :icon-name="reviewIcon"
                    size="csm"
                  />
                </div>
                <div class="w-full flex flex-col h-auto">
                  <div
                    class="fcard__header"
                    style="color: #13B56A;"
                  >
                    Final Appraisal
                  </div>
                  <div class="w-full fcard__text">
                    December 26, 2021 - January 12, 2021
                  </div>
                </div>
              </div>
            </card>
          </div>
        </div>
      </card>
    </div>

    <div class="px-3">
      <card
        class="p-5"
        style="margin-top: 4px;"
      >
        <div
          class="w-full flex flex-row"
          style="margin-top: 20px; height: 44px; flex-grow: 1"
        >
          <div class="w-2/12 h-auto">
            <h1 class="text-base font-bold">
              KPAs
            </h1>
          </div>

          <div
            class="h-full flex flex-row"
            style="width: 729px; margin-left: 222px"
          >
            <div class="allocate w-auto h-full flex flex-row">
              <span class="allocate__text"> Total Allocated Weight: </span>
              <span class="allocate__value"> 90% </span>
              <icon
                :icon-name="iconInfo"
                size="ksm"
              />
            </div>
            <div class="line line--dashed mt-5" />
            <div class="kpaplus h-full flex flex-row">
              <icon
                :icon-name="iconPlus"
                size="ksm"
                style="margin-left: 0px;"
              />
              <span class="kpaplus__text"> Add KPA Type </span>
            </div>
            <div class="line line--straight mt-5" />
            <div class="prevgoals h-full flex flex-row">
              <icon
                :icon-name="iconCopy"
                size="ksm"
                style="margin-left: 0px;"
              />
              <span class="prevgoals__text"> Import from Previous Goals </span>
            </div>
          </div>
        </div>

        <!----- List of KPA's ---->

        <div
          class="w-full h-auto flex flex-col"
          style="margin: 48px 0px 0px 0px"
        >
          <div
            v-for="kpa in kpas"
            :key="kpa._id"
          >
            <details class="w-full h-auto">
              <summary>
                <div
                  class="w-full flex flex-row"
                  style="height: 60px; margin: 4px 0px"
                >
                  <div
                    class="flex flex-row content-between kpalist"
                    style="width: 224px; height: 44px; padding: 8px 0px;"
                  >
                    <div
                      class="kpalist__text"
                    >
                      {{ kpa.name }}
                    </div>
                    <icon
                      :icon-name="iconEdit"
                      size="kpalisticon icon--edit"
                      style="margin-left: 20px"
                    />
                  </div>
                  <div class="kpa-dashed" />
                  <div
                    style="margin-left: 18px; width: 32px; height: 32px;
            padding: 4px; background-color: #F7F7FF; border-radius: 5px; text-align: center;"
                  >
                    <span
                      style="font-size: 12px; font-weight: 900;
             color: #321C3B"
                    > {{ kpa.value }} </span>
                  </div>
                  <icon
                    :icon-name="iconChevron"
                    size="kpalisticon chevr-right"
                  />
                </div>
              </summary>
              <div style="width: 1053px; overflow-x: scroll">
                <DetailedKPA :details="kpadetails" />
              </div>
            </details>
          </div>
        </div>
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
import Breadcrumb from '@scelloo/cloudenly-ui/src/components/bread-crumb';
import CText from '@scelloo/cloudenly-ui/src/components/text';
import Card from '@/components/Card';
import Icon from "@/components/Icon";
import Button from "@/components/Button";
import DetailedKPA from "@/components/DetailedKPA";

export default {
  components: {
    BackButton, Breadcrumb, Icon, CText, Card, Button, DetailedKPA
  },
  data() {
    return {
      kpas: [
        { _id: 1, name: "Financial", value: "25%" },
        { _id: 2, name: "Customer", value: "5%" },
        { _id: 3, name: "Internal Processes", value: "10%" },
        { _id: 4, name: "Core Values", value: "22%" },
        { _id: 5, name: "Special Projects", value: "18%" },
        { _id: 6, name: "People/Stakeholders", value: "25%" },
        { _id: 7, name: "Infastructure", value: "25%" },
      ],
      breadcrumbs: [
        {
          disabled: false, text: "Performance", href: "performance", id: "Performance"
        },
        {
          disabled: false, text: "Organizational Goals and Objectives", href: "Goals", id: "Goals"
        },
        {
          disabled: true, text: "Edit Goal", id: "Edit goal"
        },
      ],
      kpadetails: [
        {
          kpatext: "Capitalisation",
          disabled: true,
          objectives: "Provide on-time implementation support & ensure all 'design issues' are addressed timely.",
          weight: '5'
        },
        {
          kpatext: "CAPEX Efficiency",
          disabled: true,
          objectives: "Ensure that LLDs are released & reviewed one month prior to project implementation.",
          weight: '4'
        },
        {
          kpatext: "CAPEX Forecast",
          disabled: false,
          objectives: "Provide quarterly network gap analysis and material requirement as per schedule.",
          weight: '8'
        },
        {
          kpatext: "OPEX Forecast",
          disabled: false,
          objectives: "Aggregate & provide quarterly OPEX requirements.",
          weight: '2'
        },
        {
          kpatext: "Revenue Utilization and General Efficiency",
          disabled: false,
          objectives: "Discover better ways to manage resources and better utilization procedures for revenue generated",
          weight: '6'
        },
      ],
      moreIcon: 'more_icon',
      doccycle: 'doc-cycle',
      calendarIcon: 'calendar',
      reviewIcon: 'reviewicon',
      starreviewIcon: 'star-review',
      iconInfo: 'icon-info',
      iconPlus: 'icon-plus',
      iconCopy: 'icon-copy',
      iconEdit: 'icon-edit',
      iconChevron: 'chevronRight',
    };
  },
};
</script>

<style>
.cycle
{
  border: 1px dashed #878E99; border-radius: 5px; padding: 12px
}

.cycle__text {
  font-size: 12px;
  font-weight: 900;
  line-height: 1.3rem;
  color: #878E99;
  letter-spacing: 0.035em;
  height: 17px;
}

.fcard
{
  padding: 12px;
  height: 58px;
  margin-top: 18px;
  line-height: 16.8px;
  text-transform: uppercase;
}

.fcard__icon
{
  margin-right: 7.5px;
}

.csm
{
  width: 12px;
  height: 12px;
}

.fcard__header
{
  font-weight: 900;
  font-size: 12px;
  margin-top: -2px;
  letter-spacing: 0.035em;
}

.fcard__text
{
  font-weight: 600;
  font-size: 14px;
  color: #333333;
  margin-right: 7.5px;
  letter-spacing: 0.015em;
}

.allocate
{
  width: 320px;
  border-radius: 5px;
  padding: 8px;
  background-color: #F7F7FF;
  font-weight: 900;
  font-size: 12px;
  letter-spacing: 0.035em;
}

.allocate__text
{
  line-height: 1.4rem;
  text-transform: uppercase;
  color: #321C3B;
}

.allocate__value
{
  line-height: 17px;
  color: #EA3C53;
  margin: 3px 10px;
}

.line
{
width: 24px; height: 0px; transform: rotate(90deg);
margin-left: 6px; margin-right: 6px;
}

.line--dashed
{
 border: 1px dashed #878E99;
}

.line--straight
{
 border: 1px solid #878E99;
}

.kpaplus
{
  width: 180px;
  border-radius: 5px;
  background-color: #FFFFFF;
  padding: 10px;
}

.kpaplus__text
{
 font-weight: 900;
 font-size: 13px;
 line-height: 17px;
 letter-spacing: 0.035em;
 margin: 3px 10px;
 color: #F15A29;
}

.ksm
{
  margin-left: 11px;
  color: #EA3C53;
  width: 14px;
  height: 14px;
  margin-top: 4px;
}

.prevgoals
{
  width: 270px;
  border-radius: 5px;
  background-color: #FFFFFF;
  padding: 10px;
  font-weight: 900; font-size: 13px; line-height: 17px; letter-spacing: 0.015em;
}

.prevgoals__text
{
 margin: 3px 10px;
 color: #2176FF;
}

.kpalist__text
{
  font-size: 18px; font-weight: bold; line-height: 120%; letter-spacing: 0.015em;
  color: #321C3B; width: 170px; height: 22px;
}

.kpalisticon
{
 width: 18px; height: 18px;
}

.icon--edit
{
  margin-left: 114px; padding: 3px;
}

.kpa-dashed
{
  width: 730px; height: 0px; margin-top: 18px; margin-left: 13px;
  border: 1px dashed #878E99;
}

.chevr-right
{
  padding: 2px; margin-left: 18px;
   margin-top: 7px; margin-bottom: 7px; cursor: pointer;
}

.button-layout
 {
   width: 270px; height: 44px; margin-top: 29px;
 }

 .btn-disabled
 {
   background-color:#eeeeee; font-size: 16px; cursor: disabled;
 }

 details > summary
 {
   display: inline;
   list-style: none;
 }

</style>
