Reference: https://github.com/OXID-eSales/oxideshop_ce/pull/757  
Original module was created by [Keywan Ghadami](https://github.com/keywan-ghadami-oxid)

# Install 
Locate to the shop root directory (where the folders source and vendor are located).
```
mkdir repo
cd repo/
git clone https://github.com/michaelkeiluweit/fixed404pagewithnestedwidgets
cd ..
composer config repositories.oxs/fixed404withnestedwidgets path repo/fixed404pagewithnestedwidgets
composer require oxid-support/fixed404pagenestedwidgets
```
