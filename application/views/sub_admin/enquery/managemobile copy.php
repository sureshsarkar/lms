

<style>
    .table-wrapper {
  overflow-x: auto;
}

.table-wrapper::-webkit-scrollbar {
  height: 8px;
}

.table-wrapper::-webkit-scrollbar-thumb {
  background: var(--darkblue);
  border-radius: 40px;
}

.table-wrapper::-webkit-scrollbar-track {
  background: var(--white);
  border-radius: 40px;
}

.table-wrapper table {
  margin: 50px 0 20px;
  border-collapse: collapse;
  text-align: center;
}

.table-wrapper table th,
.table-wrapper table td {
  padding: 10px;
  min-width: 75px;
}

.table-wrapper table th {
  color: var(--white);
  background: var(--darkblue);
}

.table-wrapper table tbody tr:nth-of-type(even) > * {
  background: var(--lightblue);
}

.table-wrapper table td:first-child {
  display: grid;
  grid-template-columns: 25px 1fr;
  grid-gap: 10px;
  text-align: left;
}

.table-credits {
  font-size: 12px;
  margin-top: 10px;
}

/* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #fff;
  --darkblue: #24446b;
  --lightblue: #edf2f4;
}
.page-footer {
  position: fixed;
  right: 0;
  bottom: 50px;
  display: flex;
  align-items: center;
  padding: 5px;
  z-index: 1;
  background: var(--white);
}

.page-footer a {
  display: flex;
  margin-left: 4px;
}

    </style>
 
  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <!-- <th>1960</th>
          <th>%</th>
          <th>1965</th>
          <th>%</th>
          <th>1970</th>
          <th>%</th>
          <th>1975</th>
          <th>%</th>
          <th>1980</th>
          <th>%</th> -->
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <span>
              <span class="fi fi-af"></span>
            </span>
            <span>Afghanistan</span>
          </td>
          <td>8,151</td>
          <td>8,892</td>
          <td>1.76</td>
          <td>9,830</td>
          <!-- <td>2.03</td>
          <td>10,998</td>
          <td>2.27</td>
          <td>12,431</td>
          <td>2.48</td>
          <td>14,133</td>
          <td>2.60</td>
          <td>15,045</td>
          <td>1.26</td> -->
        </tr>
        <tr>
          <td>
            <span>
              <span class="fi fi-al"></span>
            </span>
            <span>Albania</span>
          </td>
          <td>1,228</td>
          <td>1,393</td>
          <td>2.56</td>
          <td>1,624</td>
          <!-- <td>3.12</td>
          <td>1,884</td>
          <td>3.02</td>
          <td>2,157</td>
          <td>2.74</td>
          <td>2,402</td>
          <td>2.17</td>
          <td>2,672</td>
          <td>2.16</td> -->
        </tr>
        <tr>
          <td>
            <span>
              <span class="fi fi-dz"></span>
            </span>
            <span>Algeria</span>
          </td>
          <td>8,893</td>
          <td>9,842</td>
          <td>2.05</td>
          <td>10,910</td>
          <!-- <td>2.08</td>
          <td>11,964</td>
          <td>1.86</td>
          <td>13,932</td>
          <td>3.09</td>
          <td>16,141</td>
          <td>2.99</td>
          <td>18,807</td>
          <td>3.10</td> -->
        </tr>
      </tbody>
    </table>
  </div>
