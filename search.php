<?php
        include 'DBController.php';
        $db_handle = new DBController();
        $countryResult = $db_handle->runQuery("SELECT DISTINCT field FROM usersall ORDER BY field ASC");
        ?>

          
          <h2>Search for Applicants</h2>
          <form method="POST" name="search" action="company.php">
            <div id="demo-grid">
              <div class="search-box">
                <select id="Place" name="field[]">
                  <option value="0" selected="selected">Select Field</option>
                  <?php
                  if (!empty($countryResult)) {
                    foreach ($countryResult as $key => $value) {
                      echo '<option value="' . $countryResult[$key]['field'] . '">' . $countryResult[$key]['field'] . '</option>';
                    }
                  }
                  ?>
                </select><br> <br>
                <button id="Filter">Search</button>
              </div>

              <?php
              if (!empty($_POST['field'])) {
              ?>
                <table cellpadding="10" cellspacing="1">

                  <thead>
                    <tr>
                      <th><strong>username</strong></th>
                      <th><strong>id</strong></th>
                      <th><strong>email</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = 'SELECT * from students';
                    $i = 0;
                    $selectedOptionCount = count($_POST['field']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                      $selectedOption = $selectedOption . "'" . $_POST['field'][$i] . "'";
                      if ($i < $selectedOptionCount - 1) {
                        $selectedOption = $selectedOption . ", ";
                      }

                      $i++;
                    }
                    $query = $query . " WHERE field in (" . $selectedOption . ")";

                    $result = $db_handle->runQuery($query);
                  }
                  if (!empty($result)) {
                    foreach ($result as $key => $value) {
                    ?>
                      <tr>
                        <td>
                          <div class="col" id="user_data_1"><?php echo $result[$key]['username']; ?></div>
                        </td>
                        <td>
                          <div class="col" id="user_data_2"><?php echo $result[$key]['id']; ?> </div>
                        </td>
                        <td>
                          <div class="col" id="user_data_3"><?php echo $result[$key]['email']; ?> </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              <?php
                  }
              ?>
            </div>
          </form>
