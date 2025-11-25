# Installation

## Step 1: Copy the module into your project

Place the module inside Magento:
- app/code/BuyIt/HyvaCandidateTest

## Step 2: Enable the Module

Run the following Magento CLI commands:
- bin/magento setup:upgrade
- bin/magento setup:di:compile
- bin/magento cache:flush


# Uninstall

## To disable: 

bin/magento module:disable BuyIt_HyvaCandidateTest
bin/magento cache:flush


## To delete: 

Remove the folder:
- app/code/BuyIt/HyvaCandidateTest

Then run:
- bin/magento setup:upgrade
