<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = '[["/assets/images/qianyu/qianyu_2.jpg","qianyu","千屿菠萝爽","千屿菠萝爽"],["/assets/images/qianyu/qianyu_3.jpg","qianyu","千屿高钙低脂早餐奶","千屿高钙低脂早餐奶"],["/assets/images/qianyu/qianyu_4.jpg","qianyu","千屿高钙经典浓香核桃花生奶","千屿高钙经典浓香核桃花生奶"],["/assets/images/qianyu/qianyu_5.jpg","qianyu","千屿高钙经典浓香核桃花生奶","千屿高钙经典浓香核桃花生奶"],["/assets/images/qianyu/qianyu_6.jpg","qianyu","千屿高钙低脂麦香早餐奶","千屿高钙低脂麦香早餐奶"],["/assets/images/qianyu/qianyu_7.jpg","qianyu","千屿高钙低脂浓香早餐奶","千屿高钙低脂浓香早餐奶"],["/assets/images/qianyu/qianyu_8.jpg","qianyu","千屿枸杞红枣营养低脂养生奶","千屿枸杞红枣营养低脂养生奶"],["/assets/images/qianyu/qianyu_9.jpg","qianyu","千屿枸杞红枣营养低脂养生奶","千屿枸杞红枣营养低脂养生奶"],["/assets/images/qianyu/qianyu_10.jpg","qianyu","千屿喜福罐高钙核桃花生奶","千屿喜福罐高钙核桃花生奶"],["/assets/images/qianyu/qianyu_11.jpg","qianyu","千屿喜福罐高钙核桃花生奶","千屿喜福罐高钙核桃花生奶"],["/assets/images/qianyu/qianyu_12.jpg","qianyu","千屿荔枝爽","千屿荔枝爽"],["/assets/images/qianyu/qianyu_13.jpg","qianyu","千屿高钙低脂早餐奶","千屿高钙低脂早餐奶"],["/assets/images/qianyu/qianyu_14.jpg","qianyu","千屿尊品核桃","千屿尊品核桃"],["/assets/images/qianyu/qianyu_15.jpg","qianyu","千屿尊品核桃","千屿尊品核桃"],["/assets/images/qianyu/qianyu_16.jpg","qianyu","千屿纯香经典高钙低脂核桃花生奶","千屿纯香经典高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_17.jpg","qianyu","千屿纯香经典高钙低脂核桃花生奶","千屿纯香经典高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_18.jpg","qianyu","千屿纯香经典高钙低脂核桃花生奶","千屿纯香经典高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_19.jpg","qianyu","千屿高钙低脂早餐奶","千屿高钙低脂早餐奶"],["/assets/images/qianyu/qianyu_20.jpg","qianyu","千屿蜂蜜酸角","千屿蜂蜜酸角"],["/assets/images/qianyu/qianyu_21.jpg","qianyu","千屿高钙低脂麦香早餐奶","千屿高钙低脂麦香早餐奶"],["/assets/images/qianyu/qianyu_22.jpg","qianyu","千屿高钙低脂核桃花生奶","千屿高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_23.jpg","qianyu","千屿高钙低脂核桃花生奶","千屿高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_24.jpg","qianyu","千屿高钙低脂麦香早餐奶","千屿高钙低脂麦香早餐奶"],["/assets/images/qianyu/qianyu_25.jpg","qianyu","千屿高钙低脂浓香早餐奶","千屿高钙低脂浓香早餐奶"],["/assets/images/qianyu/qianyu_26.jpg","qianyu","千屿高钙低脂早餐奶","千屿高钙低脂早餐奶"],["/assets/images/qianyu/qianyu_29.jpg","qianyu","千屿喜福罐高钙核桃花生奶","千屿喜福罐高钙核桃花生奶"],["/assets/images/qianyu/qianyu_30.jpg","qianyu","千屿中老年高钙低脂尊品核桃","千屿中老年高钙低脂尊品核桃"],["/assets/images/qianyu/qianyu_31.jpg","qianyu","千屿中老年高钙低脂尊品核桃","千屿中老年高钙低脂尊品核桃"],["/assets/images/qianyu/qianyu_32.jpg","qianyu","千屿猴头菇养生乳","千屿猴头菇养生乳"],["/assets/images/qianyu/qianyu_33.jpg","qianyu","千屿中老年高钙低脂尊品核桃","千屿中老年高钙低脂尊品核桃"],["/assets/images/qianyu/qianyu_34.jpg","qianyu","千屿高钙低脂核桃花生奶","千屿高钙低脂核桃花生奶"],["/assets/images/qianyu/qianyu_35.jpg","qianyu","千屿中老年高钙低脂低糖核桃花生奶","千屿中老年高钙低脂低糖核桃花生奶"],["/assets/images/qianyu/qianyu_36.jpg","qianyu","千屿猴头菇养生乳","千屿猴头菇养生乳"],["/assets/images/qianyu/qianyu_37.jpg","qianyu","千屿猴头菇养生乳","千屿猴头菇养生乳"],["/assets/images/qianyu/qianyu_38.jpg","qianyu","千屿芒果汁","千屿芒果汁"],["/assets/images/qianyu/qianyu_40.jpg","qianyu","千屿芒果汁","千屿芒果汁"],["/assets/images/qianyu/qianyu_41.jpg","qianyu","千屿芒果汁","千屿芒果汁"],["/assets/images/chuanfuxue/chuanfuxue_1.jpg","chuanfuxue","川府雪中老年高钙低脂核桃花生奶","川府雪中老年高钙低脂核桃花生奶"],["/assets/images/chuanfuxue/chuanfuxue_2.jpg","chuanfuxue","川府雪冰糖红毛丹","川府雪冰糖红毛丹"],["/assets/images/chuanfuxue/chuanfuxue_3.jpg","chuanfuxue","川府雪冰糖红毛丹","川府雪冰糖红毛丹"],["/assets/images/chuanfuxue/chuanfuxue_4.jpg","chuanfuxue","川府雪芒果汁","川府雪芒果汁"],["/assets/images/chuanfuxue/chuanfuxue_5.jpg","chuanfuxue","川府雪荔枝爽","川府雪荔枝爽"],["/assets/images/chuanfuxue/chuanfuxue_6.jpg","chuanfuxue","川府雪高钙低脂核桃花生奶","川府雪高钙低脂核桃花生奶"],["/assets/images/chuanfuxue/chuanfuxue_7.jpg","chuanfuxue","川府雪中老年高钙低脂低糖核桃花生奶","川府雪中老年高钙低脂低糖核桃花生奶"],["/assets/images/chuanfuxue/chuanfuxue_9.jpg","chuanfuxue","川府雪中老年高钙低脂核桃花生奶","川府雪中老年高钙低脂核桃花生奶"],["/assets/images/chuanfuxue/chuanfuxue_12.jpg","chuanfuxue","川府雪中老年高钙低脂低糖核桃花生奶","川府雪中老年高钙低脂低糖核桃花生奶","川府雪中老年高钙低脂低糖核桃花生奶","川府雪中老年高钙低脂低糖核桃花生奶"],["/assets/images/chuanfuxue/chuanfuxue_13.jpg","chuanfuxue","川府雪生榨原浆核桃乳","川府雪生榨原浆核桃乳"],["/assets/images/chuanfuxue/chuanfuxue_14.jpg","chuanfuxue","川府雪生榨原浆核桃乳礼袋","川府雪生榨原浆核桃乳礼袋"],["/assets/images/chuanfuxue/chuanfuxue_15.jpg","chuanfuxue","川府雪芒果族","川府雪芒果族"],["/assets/images/chuanfuxue/chuanfuxue_16.jpg","chuanfuxue","川府雪芒果族","川府雪芒果族"],["/assets/images/chuanfuxue/chuanfuxue_17.jpg","chuanfuxue","川府雪荔枝爽","川府雪荔枝爽"]]';
        $products = json_decode($products, true);
        $hotArray = [1,2,3,4,5,6,7,8];
        $i = 0;
        foreach ($products as $product) {
            list($poster, $brand, $name, $intro) = $product;
            $hot = 0;
            if(in_array($i, $hotArray)){
                $hot = 1;
            }
            DB::table('products')->insert([
                'id'         => Uuid::uuid4()->toString(),
                'name'       => $name,
                'brand'      => $brand,
                'poster'     => $poster,
                'hot'        => $hot,
                'intro'      => $intro,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            $i++;
        }
    }
}
