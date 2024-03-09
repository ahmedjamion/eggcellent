<div class="user-form-modal" id="user-form-modal">
  <div class="user-form-header">
    <h2>Create New user</h2>
    <button data-close-button class="close-button">&times;</button>
  </div>
  <form class="user-form">
    <div class="user-input-group">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" placeholder="Juan" />
    </div>

    <div class="user-input-group">
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" placeholder="Dela Cruz" />
    </div>

    <div class="user-input-group">
      <label for="address">Address</label>
      <input type="text" name="address" id="address" placeholder="Baliwasan, ZC" />
    </div>

    <div class="user-input-group">
      <label for="contactno">Contact No.</label>
      <input type="tel" id="contactno" name="contactno" pattern="[0-9]{11}" placeholder="09123456789" maxlength="11" />
    </div>

    <div class="user-input-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="juandc" />
    </div>

    <div class="user-input-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password" />
    </div>

    <div class="user-input-group">
      <label for="emptype">Employee Type</label>
      <select id="emptype" name="emptype">
        <option selected disabled hidden>Select a type</option>
        <option value="1">Manager</option>
        <option value="2">Sales</option>
        <option value="3">Checker</option>
        <option value="4">Staff</option>
      </select>
    </div>

    <div class="user-input-group">
      <label for="role">User Role</label>
      <select id="role" name="role">
        <option selected disabled hidden>Select a role</option>
        <option value="admin">Admin</option>
        <option value="inventory">Inventory</option>
        <option value="orders">Orders</option>
        <option value="monitoring">Monitoring</option>
        <option value="">Staff</option>
      </select>
    </div>

    <div class="user-button-group">
      <input type="reset" />
      <input type="button" value="Submit" id="submit" />
    </div>
  </form>
</div>
<div class="overlay" id="overlay"></div>