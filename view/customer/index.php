<?php include 'view/layouts/header.php'; ?>
    <main>
        <h1>Customers List</h1>
        <aside>
            <!-- display a list of menu -->
            <h2>Menu</h2>
            <nav>
                <ul>
                    <li><a href="?action=add">Add Customer</a></li>
                    <li><a href="?action=search">Search Customer</a></li>
                </ul>
            </nav>
        </aside>
        <section>
            <!-- display a table of customers -->
            <table>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th class="right">Phone</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?php echo $customer->getCustomerID(); ?></td>
                        <td><?php echo $customer->getEmailAddress(); ?></td>
                        <td><?php echo $customer->getName(); ?></td>
                        <td class="right"><?php echo $customer->getPhone(); ?>
                        </td>
                        <td>
                            <form action="." method="post" id="delete_customer_form">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="customer_id"
                                       value="<?php echo $customer->getCustomerID(); ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
<?php include 'view/layouts/footer.php'; ?>