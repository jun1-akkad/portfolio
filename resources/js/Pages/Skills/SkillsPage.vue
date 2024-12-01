<script setup>
import Layout from '@/Layouts/MainLayout'
</script>

<template>
  <layout>
    <h2>スキルとか</h2>
    <h3>概要</h3>
    <div>
      <h4>はじめに</h4>
      <p>メインはPHP Laravel の案件を多く経験してきました。</p>
      <p>最近はフロントエンドの技術も追いかけていますが、まだまだ苦手です。デザインはからっきし。。。</p>
      <p>Laravel & Inertia でバックエンド〜フロントをシームレスに対応する案件を担当する機会が増えてます。</p>
    </div>
    <div>
      <h4>フロントエンドの開発について</h4>
      <p>デザインとかは壊滅的にセンスありません。デザイナーさんがFigma とかで作ってくれた画面を実現する、とかも苦手です。CSS 使いこなすことができていません。</p>
      <p>Vue.js でいうところの&lt;script&gt; の実装はそれなりに実績があります。フロントエンドのエンジニアさんから重宝されてます。たぶん。<br>&lt;template&gt; の実装は苦手です。フロントエンドのエンジニアさんから呆れ果てられてます。たぶん。</p>
    </div>
    <div>
      <h4>ユニットテストについて</h4>
    </div>

    <div>
      <h3>ふだんの開発環境とか使っているツールとか</h3>
      <table>
        <tbody>
          <tr>
            <th rowspan="2">PC</th>
            <td>MacBook Pro M1</td>
          </tr>
          <tr>
            <td>MacBook Air M3</td>
          </tr>
          <tr>
            <th>エディタ</th>
            <td>VSCode</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div>
      <h3>使っている言語とかフレームワークとか</h3>
      <table>
        <thead>
          <tr>
            <th>言語</th>
            <th>フレームワーク</th>
            <th>実務経験年数</th>
            <th>自信のほど</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th rowspan="4">PHP</th>
            <td>Laravel</td>
            <td>20年以上</td>
            <td>それなりに自信あります</td>
          </tr>
          <tr>
            <td>Cake PHP</td>
            <td>1年</td>
            <td>そこそこ使えます</td>
          </tr>
          <tr>
            <td>EC-CUBE</td>
            <td>4年</td>
            <td rowspan="2">いろいろカスタマイズとかプラグイン作成とかしてました</td>
          </tr>
          <tr>
            <td>WordPress</td>
            <td>3年</td>
          </tr>
          <tr>
            <th>JavaScript</th>
            <td rowspan="2">Vue.js</td>
            <td>20年以上</td>
            <td rowspan="2">ロジックはそれなりに</td>
          </tr>
          <tr>
            <th>TypeScript</th>
            <td>2年</td>
          </tr>
          <tr>
            <th>Python3</th>
            <td>Flask</td>
            <td>6年</td>
            <td>単発で使うツール類とかなら対応可能。大規模なのは未経験</td>
          </tr>
          <tr>
            <th>C/C++</th>
            <td>Qt</td>
            <td>20年以上</td>
            <td>最近縁がない</td>
          </tr>
          <tr>
            <td colspan="4">ほか、Go, Rust, R, VB, C#, Perl, COBOL など。嗜む程度。。。</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div>
      <h3>データベース</h3>
      <table>
        <tbody>
          <tr>
            <th>PostgreSQL</th>
            <td>得意</td>
          </tr>
          <tr>
            <th>MySQL</th>
            <td>まぁ得意</td>
          </tr>
          <tr>
            <th>Oracle</th>
            <td>そこそこ</td>
          </tr>
          <tr>
            <th>SQL Server</th>
            <td>あまり使いたくない</td>
          </tr>
          <tr>
            <th>SQLite</th>
            <td>テスト用に活用中</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div>
      <h3>クラウドサービス</h3>
      <p>主に AWS を利用しています。EC2, RDS, S3, Route53 などなど。</p>
      <p>GCP, Firebase の経験あります。</p>
      <p>Azure 経験ありません。</p>
      <p>認証サービスとしてAuth0 との連携の経験あります。</p>
      <p>決済サービスとしてGMOペイメントやStripe のAPI を叩きまくってました。</p>
    </div>
  </layout>
</template>
